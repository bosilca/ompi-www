<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 14:44:09 2014" -->
<!-- isoreceived="20140822184409" -->
<!-- sent="Fri, 22 Aug 2014 14:44:08 -0400" -->
<!-- isosent="20140822184408" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="CA+ssbKUqoe29QRpppm2XAhABueyVZ7RrRu3zq8tSmY=_N3Qt0w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53F7893F.1060207_at_dsic.upv.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 14:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Oscar for the detailed information, but I'm still wondering how
<br>
would the copying in 2 would be different than what's done here with
<br>
copying to a buffer.
<br>
<p><p>On Fri, Aug 22, 2014 at 2:17 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; El 22/08/14 17:10, Saliya Ekanayake escribi&#195;&#179;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Say there's a 2 dimensional double array (size m x n) that needs to be
</span><br>
<span class="quotelev2">&gt;&gt; sent to another rank. I see two options to get this done,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev2">&gt;&gt; 2. Copy values to a 1D array of size m*n and send it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess 2 would internally do the copying to a buffer and use it, so
</span><br>
<span class="quotelev2">&gt;&gt; suggesting 1. is the best option. Is this the case or is there a better way
</span><br>
<span class="quotelev2">&gt;&gt; to do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The best option is 1 because 2 requires one extra copy to C heap.
</span><br>
<span class="quotelev1">&gt; Supposing the matrix is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     double matrix[][] = new double[m][n];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you can allocate a direct DoubleBuffer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     DoubleBuffer buffer = MPI.newDoubleBuffer(m * n);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to send/receive the matrix I suggest to use the bulk put/get
</span><br>
<span class="quotelev1">&gt; methods:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for(int i = 0; i &lt; m; i++)
</span><br>
<span class="quotelev1">&gt;         buffer.put(matrix[i]); // Copy to the buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI.COMM_WORLD.send(buffer, m*n, MPI.DOUBLE, 1, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receive code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI.COMM_WORLD.recv(buffer, m*n, MPI.DOUBLE, 0, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for(int i = 0; i &lt; m; i++)
</span><br>
<span class="quotelev1">&gt;         buffer.get(matrix[i]); // Copy from the buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that bulk get/put methods increment the buffer position in n. So if
</span><br>
<span class="quotelev1">&gt; you want reuse the buffer you must set the buffer position to 0 before copy
</span><br>
<span class="quotelev1">&gt; the matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     buffer.position(0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 25130.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev1">&gt; 25131.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25131.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25133.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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