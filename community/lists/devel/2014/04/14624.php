<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 01:55:19 2014" -->
<!-- isoreceived="20140428055519" -->
<!-- sent="Mon, 28 Apr 2014 14:55:20 +0900" -->
<!-- isosent="20140428055520" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="535DED48.4060902_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA067DDF-616E-456F-9C4B-571A0EE20C69_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 01:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I might have misunderstood Jeff's comment :
<br>
<p><span class="quotelev1">&gt; The broken part(s) is(are) likely somewhere in the datatype and/or PML code (my guess).  Keep in mind that my only testing of this feature is in *homogeneous* mode -- i.e., I compile with --enable-heterogeneous and then run tests on homogeneous machines.  Meaning: it's not only broken for actual heterogeneity, it's also broken in the &quot;unity&quot;/homogeneous case.
</span><br>
<p>Unfortunatly, a trivial send/recv can hang in this case
<br>
(--enable-heterogeneous and homogenous cluster of little endian procs).
<br>
<p>i opened #4568 <a href="https://svn.open-mpi.org/trac/ompi/ticket/4568">https://svn.open-mpi.org/trac/ompi/ticket/4568</a> in order
<br>
to track this issue
<br>
(uninitialized data can cause a hang with this config)
<br>
<p>trunk is affected, v1.8 is very likely affected too
<br>
<p>Gilles
<br>
<p>On 2014/04/28 12:22, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think you misunderstood his comment. It works fine on a homogeneous cluster, even with --enable-hetero. I've run it that way on my cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2014, at 7:50 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to Jeff's comment, OpenMPI compiled with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogeneous is broken even in an homogeneous cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as a first step, MTT could be ran with OpenMPI compiled with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogenous and running on an homogeneous cluster
</span><br>
<span class="quotelev2">&gt;&gt; (ideally on both little and big endian) in order to identify and fix the
</span><br>
<span class="quotelev2">&gt;&gt; bug/regression.
</span><br>
<span class="quotelev2">&gt;&gt; /* this build is currently disabled in the MTT config of the
</span><br>
<span class="quotelev2">&gt;&gt; cisco-community cluster */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14625.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
