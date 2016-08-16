<?
$subject_val = "[OMPI users] Problem building OpenMPI 1.8 on RHEL6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 11:26:55 2014" -->
<!-- isoreceived="20140401152655" -->
<!-- sent="Tue, 1 Apr 2014 15:26:00 +0000" -->
<!-- isosent="20140401152600" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building OpenMPI 1.8 on RHEL6" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB61E2D_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem building OpenMPI 1.8 on RHEL6<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 11:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24022.php">Fabricio Cannini: "[OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting some errors building 1.8 on RHEL6.  I tried autoreconf as suggested, but it failed for the same reason.  Is there a minimum version of m4 required that is newer than that provided by RHEL6?
<br>
<p>Thanks
<br>
<p>aclocal.m4:16: warning: this file was generated for autoconf 2.69.
<br>
You have another version of autoconf.  It may work, but is not guaranteed to.
<br>
If you have problems, you may need to regenerate the build system entirely.
<br>
To do so, use the procedure documented by the package, typically 'autoreconf'.
<br>
configure.ac:40: error: m4_defn: undefined macro: _m4_divert_diversion
<br>
configure.ac:40: the top level
<br>
autom4te: /usr/bin/m4 failed with exit status: 1
<br>
<p>[bloscel_at_head openmpi]$ autoreconf
<br>
configure.ac:40: error: m4_defn: undefined macro: _m4_divert_diversion
<br>
configure.ac:40: the top level
<br>
autom4te: /usr/bin/m4 failed with exit status: 1
<br>
aclocal: autom4te failed with exit status: 1
<br>
autoreconf: aclocal failed with exit status: 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24022.php">Fabricio Cannini: "[OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24024.php">Ralph Castain: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
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