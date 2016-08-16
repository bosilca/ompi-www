<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 02:06:44 2011" -->
<!-- isoreceived="20111219070644" -->
<!-- sent="Sun, 18 Dec 2011 23:06:40 -0800" -->
<!-- isosent="20111219070640" -->
<!-- name="V. Ram" -->
<!-- email="vramml0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="1324278400.9460.140661013376189_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEDB4C4.5010007_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> V. Ram (<em>vramml0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 02:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17995.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Dec 18, 2011, at 11:39 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 16-Dec-11 4:28 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Very strange.  I have a lot of older mthca-based HCAs in my Cisco MPI test cluster, and I don't see these kinds of problems.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox -- any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if I understand it right, you have a mixed cluster - some
</span><br>
<span class="quotelev1">&gt; machines with ConnecX HCAs family (mlx4), and some with InfiniHost
</span><br>
<span class="quotelev1">&gt; HCAs (mthca), and the problem arises only on machines with mthca.
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; When exactly do you see this RNR problem:
</span><br>
<span class="quotelev1">&gt;  - when all the participating nodes are mthcas?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt;  - when the MPI job runs on both types of HCAs?
</span><br>
<p>We have actually seen the same problem as the user who sent the
<br>
following:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2011/06/16773.php">http://www.open-mpi.org/community/lists/users/2011/06/16773.php</a>
<br>
so we don't bother trying to run jobs on heterogeneous hardware.
<br>
<p>Our Slurm partitions are defined by hardware type, and we do not allow
<br>
users to run jobs across different hardware types using InfiniBand.  If
<br>
they want to run embarrassingly parallel jobs across different hardware
<br>
types, we mandate that they use Ethernet only (which does work as
<br>
expected).
<br>
<p>Thank you,
<br>
<p>V. Ram
<br>
<p><span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 15, 2011, at 7:24 PM, V. Ram wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Terry,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks so much for the response.  My replies are in-line below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Dec 15, 2011, at 07:00 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; IIRC, RNR's are usually due to the receiving side not having a segment
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; registered and ready to receive data on a QP.  The btl does go through a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; big dance and does its own flow control to make sure this doesn't happen.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So when this happens are both the sending and receiving nodes using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mthca's to communicate with?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes.  For the newer nodes using onboard mlx4, this issue doesn't arise.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The mlx4-based nodes are using the same core switch as the mthca nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; By any chance is it a particular node (or pair of nodes) this seems to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; happen with?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No.  I've got 40 nodes total with this hardware configuration, and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem has been seen on most/all nodes at one time or another.  It
</span><br>
<span class="quotelev3">&gt; &gt;&gt; doesn't seem, based on the limited number of observable parameters I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; aware of, to be dependent on the number of nodes involved.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is an intermittent problem, but when it happens, it happens at job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch, and it does occur most of the time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; V. Ram
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Open MPI InfiniBand gurus and/or Mellanox: could I please get some
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; assistance with this? Any suggestions on tunables or debugging
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; parameters to try?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 12, 2011, at 10:42 AM, V. Ram wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We are running a cluster that has a good number of older nodes with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; module).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; These adapters are all at firmware level 4.8.917 .
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64. Jobs are
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; launched/managed using Slurm 2.2.7. The IB software and drivers
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in use are all from this OFED version.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On nodes with the mthca hardware *only*, we get frequent, but
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; intermittent job startup failures, with messages like:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [[19373,1],54][btl_openib_component.c:3320:handle_wc] from compute-c3-07
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to: compute-c3-01 error polling LP CQ with status RECEIVER NOT READY
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; number 13 for wr_id 2a25c200 opcode 128 vendor error 135 qp_idx 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; connection between two MPI processes has been exceeded. In general,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; this should not happen because Open MPI uses flow control on per-peer
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; connections to ensure that receivers are always ready when data is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sent.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [further standard error text snipped...]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; peer to which it was connected:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Local host: compute-c3-07
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Peer host: compute-c3-01
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; problem fixed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; During these job runs, I have monitored the InfiniBand performance
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; counters on the endpoints and switch. No telltale counters for any of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; these ports change during these failed job initiations.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ibdiagnet works fine and properly enumerates the fabric and related
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; performance counters, both from the affected nodes, as well as other
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; nodes attached to the IB switch. The IB connectivity itself seems fine
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; from these nodes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Other nodes with different HCAs use the same InfiniBand fabric
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; continuously without any issue, so I don't think it's the fabric/switch.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm at a loss for what to do next to try and find the root cause of the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; issue. I suspect something perhaps having to do with the mthca
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; support/drivers, but how can I track this down further?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; V. Ram.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - One of many happy users:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   <a href="http://www.fastmail.fm/docs/quotes.html">http://www.fastmail.fm/docs/quotes.html</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Does exactly what it says on the tin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17995.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Reply:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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