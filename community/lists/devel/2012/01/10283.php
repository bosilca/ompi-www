<?
$subject_val = "Re: [OMPI devel] 1.4.5rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 19:26:05 2012" -->
<!-- isoreceived="20120131002605" -->
<!-- sent="Mon, 30 Jan 2012 16:25:46 -0800" -->
<!-- isosent="20120131002546" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc3 released" -->
<!-- id="4F27350A.7020508_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E852CFE-49BA-4A53-AE71-D0266347CC1A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc3 released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 19:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In retesting I see that the following items I reported in 1.4.5rc2 or 
<br>
rc1 have NOT been resolved in rc3.
<br>
This list is meant to be complete, even for issues that I reported so 
<br>
recently that no fix is expected and those that probably won't be fixed 
<br>
at all.
<br>
<p>0) README for Solaris Studio compilers (&quot;don't set CXX=sunCC&quot;) which I 
<br>
mentioned in my previous post.
<br>
<p>1) The 1.4.x version of ticket #2954 has not been fixed yet.
<br>
In other words, one must still use GNU Make on FreeBSD and OpenBSD.
<br>
I saw George committed the fix to 1.5.x, but Did the CMRs ever get 
<br>
created for HEAD and 1.4?
<br>
<p>2) Must --disable-io-romio on OpenBSD
<br>
<p>3) No MFSTYPENAMELEN in MacOS-10.3
<br>
The README says &quot;OS X (10.4)&quot; has been tested, but doesn't state 10.4 as 
<br>
a minimum requirement.
<br>
I've noted that 1.5.x is smart enough to enforce 10.4 as a minimum at 
<br>
configure time:
<br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI does not support OS X prior to version 
</span><br>
<span class="quotelev1">&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue 
</span><br>
<p>4) Icc-9.1 and icc-10.0 fail to build atomics on IA64 (gcc is fine on 
<br>
same machine)
<br>
<p>5) atomic_spinlock test failure on linux/ppc64/xlc-9.0 (ppc32 PASSes, as 
<br>
does ppc64 w/ xlc-8.0 and xlc-11.1).
<br>
If this is not a OMPI bug, then it may be worth noting in the README.
<br>
<p>6) linux/xlc-7.0 can't build atomics (to document in README)
<br>
<p>-Paul
<br>
<p><p>On 1/30/2012 2:25 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; A few little fixes incorporated; posted in the usual location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The shared library versions still need to be updated before final release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Combined patch from Fujitsu. Fixes a collections of typos over the
</span><br>
<span class="quotelev1">&gt; code and man pages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modify Solaris Studio Complier notes about using xarch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixes #2967: pretty much copy the text from MPI-2.2 in the description
</span><br>
<span class="quotelev1">&gt; of the group argument to MPI_COMM_CREATE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixes #2844: ensure to take the value of --with(out)-memory-manager
</span><br>
<span class="quotelev1">&gt; into account when configuring the components of the faramework.  If
</span><br>
<span class="quotelev1">&gt; --without-memory-manager was given, then we really don't want any
</span><br>
<span class="quotelev1">&gt; memory managers to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NEWS and README updated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10278.php">Jeff Squyres: "[OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10284.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
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
