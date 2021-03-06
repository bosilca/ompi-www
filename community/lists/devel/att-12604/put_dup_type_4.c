#include <stdint.h>
#include <stdio.h>
#include <string.h>
#include <mpi.h>

static MPI_Datatype types[100];
static MPI_Win win;
static int obuf[1], tbuf[100];

static void do_put(int expected, int index, char *description)
{
    int i;

    for (i = 1; types[i] != MPI_DATATYPE_NULL; i++);
    i--;

    if (i != 0) {
        MPI_Type_commit(&types[i]);
    }

    memset(tbuf, 0, sizeof(tbuf));

    MPI_Win_fence(0, win);
    MPI_Put(obuf, 1, types[0], 0, 0, 1, types[i], win);
    MPI_Win_fence(0, win);

    if (tbuf[index] != expected) {
        printf("NG %s (expected: %d, actual: %d, index: %d)\n",
               description, expected, tbuf[index], index);
    } else {
        printf("OK %s\n", description);
    }

    for (i = 1; types[i] != MPI_DATATYPE_NULL; i++) {
        MPI_Type_free(&types[i]);
    }
}

int main(int argc, char *argv[])
{
    int i;
    int displs[] = {1};
    int blens[] = {1};

    types[0] = MPI_INT;
    for (i = 1; i < sizeof(types) / sizeof(types[0]); i++) {
        types[i] = MPI_DATATYPE_NULL;
    }

    obuf[0] = 77;

    MPI_Init(&argc, &argv);
    MPI_Win_create(tbuf, sizeof(tbuf[0]), sizeof(tbuf) / sizeof(tbuf[0]),
                   MPI_INFO_NULL, MPI_COMM_SELF, &win);

    do_put(77, 0, "predefined");

    MPI_Type_dup(types[0], &types[1]);
    do_put(77, 0, "dup");

    MPI_Type_contiguous(1, types[0], &types[1]);
    do_put(77, 0, "contiguous");

    MPI_Type_vector(1, 1, 1, types[0], &types[1]);
    do_put(77, 0, "vector");

    MPI_Type_indexed(1, blens, displs, types[0], &types[1]);
    do_put(77, 1, "indexed");

    MPI_Type_contiguous(1, types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    do_put(77, 0, "contiguous+dup");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    do_put(77, 0, "dup+contiguous");

    MPI_Type_indexed(1, blens, displs, types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    do_put(77, 1, "indexed+contiguous");

    MPI_Type_contiguous(1, types[0], &types[1]);
    MPI_Type_indexed(1, blens, displs, types[1], &types[2]);
    do_put(77, 1, "contiguous+indexed");

    MPI_Type_contiguous(1, types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_contiguous(1, types[2], &types[3]);
    do_put(77, 0, "contiguous+dup+contiguous");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    do_put(77, 0, "dup+contiguous+dup");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    do_put(77, 0, "dup+dup+dup");

    MPI_Type_indexed(1, blens, displs, types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    MPI_Type_vector(1, 1, 1, types[2], &types[3]);
    do_put(77, 1, "indexed+contiguous+vector");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    MPI_Type_dup(types[3], &types[4]);
    do_put(77, 0, "dup+contiguous+dup+dup");

    MPI_Type_contiguous(1, types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    MPI_Type_dup(types[3], &types[4]);
    do_put(77, 0, "contiguous+dup+dup+dup");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    MPI_Type_contiguous(1, types[3], &types[4]);
    do_put(77, 0, "dup+dup+dup+contiguous");

    MPI_Type_indexed(1, blens, displs, types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    MPI_Type_contiguous(1, types[3], &types[4]);
    do_put(77, 1, "indexed+dup+dup+contiguous");

    MPI_Type_indexed(1, blens, displs, types[0], &types[1]);
    MPI_Type_contiguous(1, types[1], &types[2]);
    MPI_Type_dup(types[2], &types[3]);
    MPI_Type_dup(types[3], &types[4]);
    do_put(77, 1, "indexed+contiguous+dup+dup");

    MPI_Type_dup(types[0], &types[1]);
    MPI_Type_dup(types[1], &types[2]);
    MPI_Type_indexed(1, blens, displs, types[2], &types[3]);
    MPI_Type_contiguous(1, types[3], &types[4]);
    do_put(77, 1, "dup+dup+indexed+contiguous");

    MPI_Win_free(&win);
    MPI_Finalize();

    printf("finished\n");

    return 0;
}

