<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 00:08:35 2014" -->
<!-- isoreceived="20140801040835" -->
<!-- sent="Thu, 31 Jul 2014 21:08:33 -0700" -->
<!-- isosent="20140801040833" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1" -->
<!-- id="CAAvDA16HOGzBbNApYXOUOuVLe4WOokTfUO18ZY2MuU7RAV34Xw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B4A2FEB-C527-452D-B3F7-9D1BD75619DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 00:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="15426.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15424.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general I am only setup to build from tarballs, not svn.
<br>
However, I can (and will) apply this change manually w/o difficulty.
<br>
<p>I will report back when I've had a chance to try that.
<br>
<p>I already have many builds in-flight to test George's atomics patch and am
<br>
in danger of confusing myself if I am not careful.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 31, 2014 at 8:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: we had Siegmar try that and it didn't solve the problem. Paul?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 8:28 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-07-31 23:28:23 EDT (Thu, 31 Jul 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 32388
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32388">https://svn.open-mpi.org/trac/ompi/changeset/32388</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Missing alloca.h. Thanks Paul for catching this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c |     3 +++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/pml/ob1/pml_ob1_isend.c |     3 +++
</span><br>
<span class="quotelev2">&gt; &gt;   2 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c    Thu Jul 31 21:00:42 2014
</span><br>
<span class="quotelev1">&gt;      (r32387)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c    2014-07-31 23:28:23 EDT
</span><br>
<span class="quotelev1">&gt; (Thu, 31 Jul 2014)      (r32388)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -28,6 +28,9 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;pml_ob1_recvfrag.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;ompi/message/message.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int mca_pml_ob1_irecv_init(void *addr,
</span><br>
<span class="quotelev2">&gt; &gt;                            size_t count,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_isend.c    Thu Jul 31 21:00:42 2014
</span><br>
<span class="quotelev1">&gt;      (r32387)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_isend.c    2014-07-31 23:28:23 EDT
</span><br>
<span class="quotelev1">&gt; (Thu, 31 Jul 2014)      (r32388)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -26,6 +26,9 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;pml_ob1_sendreq.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;pml_ob1_recvreq.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int mca_pml_ob1_isend_init(void *buf,
</span><br>
<span class="quotelev2">&gt; &gt;                            size_t count,
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15424.php">http://www.open-mpi.org/community/lists/devel/2014/07/15424.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="15426.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15424.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
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
