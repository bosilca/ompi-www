#include <mpi.h>
#include <stdio.h>
#include <numa.h>
#include <hwloc.h>


#define PAGE_SIZE 4096

int main(int argc,char *argv[]){


	/* Bind memory example: each thread bind a piece of allocated memory in local node
	 */

	MPI_Init (&argc, &argv);
	int rank;
	int result;

	MPI_Comm_rank (MPI_COMM_WORLD, &rank);

        hwloc_topology_t topology;
        hwloc_cpuset_t cpuset;
	hwloc_obj_t obj;
	hwloc_topology_init(&topology);
	hwloc_topology_load(topology);

	size_t i;

	// allocate 8 GB
	size_t len=8192000000;

	long free_mem = 0;

	numa_node_size(0,&free_mem);
	printf("free memory node 0: %li \n", free_mem);
	numa_node_size(1,&free_mem);
	printf("free memory node 1: %li \n", free_mem);

	char* array;
	array=(char*)malloc(len);

        if(array==NULL) {
		printf( " Error allocation memory \n");
                return -1;
	}

#pragma omp parallel num_threads(2)
   {
          
        size_t chunk = len/omp_get_num_threads();
       	int tid = omp_get_thread_num();
	int my_pu_id, my_node_id;
	int res;
        size_t i;

        hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
        hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj->cpuset);
        hwloc_bitmap_singlify(cpuset);
        hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
    
        for( i = chunk*tid; i < len; i+=PAGE_SIZE) {
           res = hwloc_set_area_membind_nodeset(topology, &array[i], PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
           if(res<0) {
	      printf( " ERRORE: %s \n", strerror(errno));
              break;
           }

       }

  }

	numa_node_size(0,&free_mem);
	printf("free memory node 0: %li \n", free_mem);
	numa_node_size(1,&free_mem);
	printf("free memory node 1: %li \n", free_mem);


	free(array);

	MPI_Finalize();


	return 0;

}
