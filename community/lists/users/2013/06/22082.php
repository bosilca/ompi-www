<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 08:01:29 2013" -->
<!-- isoreceived="20130612120129" -->
<!-- sent="Wed, 12 Jun 2013 15:01:23 +0300" -->
<!-- isosent="20130612120123" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem" -->
<!-- id="CAAO1KyYhip+ing-RQxkgxmpGVfjF5YpeKcPue=8AMDg4n-P-ig_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="45AE99D2-03C6-4577-9788-F1C946972208_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 08:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22081.php">Reem Alraddadi: "[OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, what ofed version (ofed_info -s) and mxm version (rpm -qi mxm) do you
<br>
use?
<br>
<p><p>On Wed, Jun 12, 2013 at 3:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Great! Would you mind showing the revised table? I'm curious as to the
</span><br>
<span class="quotelev1">&gt; relative performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2013, at 4:53 PM, eblosch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Problem solved. I did not configure with --with-mxm=/opt/mellanox/mcm and
</span><br>
<span class="quotelev2">&gt; &gt; this location was not auto-detected.  Once I rebuilt with this option,
</span><br>
<span class="quotelev2">&gt; &gt; everything worked fine. Scaled better than MVAPICH out to 800. MVAPICH
</span><br>
<span class="quotelev2">&gt; &gt; configure log showed that it had found this component of the OFED stack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you run at 224 and things look okay, then I would suspect something
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the upper level switch that spans cabinets. At that point, I'd have to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; leave it to Mellanox to advise.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 11, 2013, at 6:55 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried adding &quot;-mca btl openib,sm,self&quot;  but it did not make any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; difference.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jesus&#146; e-mail this morning has got me thinking.  In our system, each
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cabinet has 224 cores, and we are reaching a different level of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system architecture when we go beyond 224.  I got an additional data
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; point at 256 and found that performance is already falling off. Perhaps
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I did not build OpenMPI properly to support the Mellanox adapters that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are used in the backplane, or I need some configuration setting similar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to FAQ #19 in the Tuning/Openfabrics section.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Sunday, June 09, 2013 6:48 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Strange - it looks like a classic oversubscription behavior. Another
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; possibility is that it isn't using IB for some reason when extended to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the other nodes. What does your cmd line look like? Have you tried
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; adding &quot;-mca btl openib,sm,self&quot; just to ensure it doesn't use TCP for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; some reason?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 9, 2013, at 4:31 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Correct.  20 nodes, 8 cores per dual-socket on each node = 360.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Sunday, June 09, 2013 6:18 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So, just to be sure - when you run 320 &quot;cores&quot;, you are running across
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 20 nodes?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just want to ensure we are using &quot;core&quot; the same way - some people
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; confuse cores with hyperthreads.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 9, 2013, at 3:50 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 16.  dual-socket Xeon, E5-2670.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am trying a larger model to see if the performance drop-off happens
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a different number of cores.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also I&#146;m running some intermediate core-count sizes to refine the curve
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a bit.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I also added mpi_show_mca_params all, and at the same time,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_openib_use_eager_rdma 1, just to see if that does anything.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Sunday, June 09, 2013 5:04 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] Need advice on performance problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Looks to me like things are okay thru 160, and then things fall apart
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; after that point. How many cores are on a node?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 9, 2013, at 1:59 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I&#146;m having some trouble getting good scaling with OpenMPI 1.6.4 and I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; don&#146;t know where to start looking. This is an Infiniband FDR network
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with Sandy Bridge nodes.  I am using affinity (--bind-to-core) but no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; other options. As the number of cores goes up, the message sizes are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; typically going down. There seem to be lots of options in the FAQ, and
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would welcome any advice on where to start.  All these timings are on a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; completely empty system except for me.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MPI              # cores   Ave. Rate   Std. Dev. %  # timings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Speedup    Efficiency
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ================================================================================================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |   16   |    8.6783  |   0.995 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |   48   |    8.7665  |   1.937 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 47.517  |  0.9899
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |   80   |    8.8900  |   2.291 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 78.095  |  0.9762
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  160   |    8.9897  |   2.409 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 154.457  |  0.9654
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  320   |    8.9780  |   2.801 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 309.317  |  0.9666
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  480   |    8.9704  |   2.316 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 464.366  |  0.9674
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  640   |    9.0792  |   1.138 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 611.739  |  0.9558
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  720   |    9.1328  |   1.052 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 684.162  |  0.9502
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MVAPICH            |  800   |    9.1945  |   0.773 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 755.079  |  0.9438
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |   16   |    8.6743  |   2.335 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |   48   |    8.7826  |   1.605 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 47.408  |  0.9877
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |   80   |    8.8861  |   0.120 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 78.093  |  0.9762
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  160   |    8.9774  |   0.785 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 154.598  |  0.9662
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  320   |   12.0585  |  16.950 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 230.191  |  0.7193
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  480   |   14.8330  |   1.300 % |       2  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 280.701  |  0.5848
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  640   |   17.1723  |   2.577 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 323.283  |  0.5051
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  720   |   18.2153  |   2.798 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 342.868  |  0.4762
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI            |  800   |   19.3603  |   2.254 % |       3  |
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 358.434  |  0.4480
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22081.php">Reem Alraddadi: "[OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22083.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
