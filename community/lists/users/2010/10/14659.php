<?
$subject_val = "Re: [OMPI users] open MPI please recommend a debugger for open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 13:29:42 2010" -->
<!-- isoreceived="20101029172942" -->
<!-- sent="Fri, 29 Oct 2010 11:29:37 -0600" -->
<!-- isosent="20101029172937" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open MPI please recommend a debugger for open MPI" -->
<!-- id="SNT134-w61A6AD454A1E26A16D3DF4CB450_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="61514DE3-631D-4B18-8DA3-0978360BEF17_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] open MPI please recommend a debugger for open MPI<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 13:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanksI have run padb (the new one with your patch) on my system and got :-bash-3.2$ padb -Ormgr=pbs -Q 48516.cluster$VAR1 = {};Job 48516.cluster  is not activeActually, the job is running. 
<br>
How to check whether my system has pbs_pro ?
<br>
Any help is appreciated. thanksJinxu DingOct. 29 2010
<br>
<p><span class="quotelev1">&gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Fri, 29 Oct 2010 18:21:46 +0100
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] open MPI please recommend a debugger for open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 29 Oct 2010, at 12:06, Jeremy Roberts wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'd suggest looking into TotalView (<a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>) and/or DDT (<a href="http://www.allinea.com/">http://www.allinea.com/</a>).  I've used TotalView pretty extensively and found it to be pretty easy to use.  They are both commercial, however, and not cheap.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As far as I know, there isn't a whole lot of open source support for parallel debugging. The Parallel Tools Platform of Eclipse claims to provide a parallel debugger, though I have yet to try it (<a href="http://www.eclipse.org/ptp/">http://www.eclipse.org/ptp/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeremy has covered the graphical parallel debuggers that I'm aware of, for a different approach there is padb which isn't a &quot;parallel debugger&quot; in the traditional model but is able to show you the same type of information, it won't allow you to point-and-click through the source or single step through the code but it is lightweight and will show you the information which you need to know. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb needs to integrate with the resource manager, I know it works with pbs_pro but it seems there are a few issues on your system which is pbs (without the pro).  I can help you with this and work through the problems but only if you work with me and provide details of the integration, in particular I've sent you a version which has a small patch and some debug printfs added, if you could send me the output from this I'd be able to tell you if it was likely to work and how to go about making it do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14658.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14660.php">Ashley Pittman: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
