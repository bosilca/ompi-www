<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 17:46:46 2014" -->
<!-- isoreceived="20141211224646" -->
<!-- sent="Thu, 11 Dec 2014 23:46:44 +0100" -->
<!-- isosent="20141211224644" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="548A1ED4.8080006_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1789189459.11274.1418337610388.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 17:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem was fixed in hwloc upstream recently.
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
<br>
Brice
<br>
<p><p>Le 11/12/2014 23:40, Jorge D'Elia a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our updates of OpenMPI to 1.8.3 (and 1.8.4) were 
</span><br>
<span class="quotelev1">&gt; all OK using Fedora &gt;= 17 and system gcc compilers
</span><br>
<span class="quotelev1">&gt; on ia32 or ia64 machines. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the &quot;make all&quot; step failed using Fedora 14 
</span><br>
<span class="quotelev1">&gt; with a beta gcc 5.0 compiler on an ia32 machine 
</span><br>
<span class="quotelev1">&gt; with message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A roundabout way to solve it was perform, first, 
</span><br>
<span class="quotelev1">&gt; a separated installation of the hwloc package (we use 
</span><br>
<span class="quotelev1">&gt; Release v1.10.0 (stable)) and, second, configure 
</span><br>
<span class="quotelev1">&gt; OpenMPI using its flag: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=${HWLOC_HOME}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; although, in this way, the include and library path 
</span><br>
<span class="quotelev1">&gt; must be given, e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  export CFLAGS=&quot;-I/usr/beta/hwloc/include&quot; ; echo ${CFLAGS}
</span><br>
<span class="quotelev1">&gt;  export LDFLAGS=&quot;-L/usr/beta/hwloc/lib&quot;    ; echo ${LDFLAGS}
</span><br>
<span class="quotelev1">&gt;  export LIBS=&quot;-lhwloc&quot;                     ; echo ${LIBS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to verify that the hwloc works OK, it would be useful 
</span><br>
<span class="quotelev1">&gt; to include in the OpenMPI distribution a simple test like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc ${CFLAGS} ${LDFLAGS} -o hwloc-hello.exe hwloc-hello.c ${LIBS}
</span><br>
<span class="quotelev1">&gt; $ ./hwloc-hello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (we apologize to forget to use the --with-hwloc-libdir flag ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this previous step we could overcome the fatal error 
</span><br>
<span class="quotelev1">&gt; in the configuration step related to the hwloc package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This (fixed) trouble in the configuration step is the same 
</span><br>
<span class="quotelev1">&gt; as the reported as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on 2014-08-12 15:08:38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jorge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt;&gt; De: &quot;Jorge D'Elia&quot; &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enviado: Martes, 12 de Agosto 2014 16:08:38
</span><br>
<span class="quotelev2">&gt;&gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These new versions of the tgz files replace the previous ones:
</span><br>
<span class="quotelev2">&gt;&gt; I had used an old outdated session environment. However, the
</span><br>
<span class="quotelev2">&gt;&gt; configuration and installation was OK again in each case.
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the noise caused by the previous tgz files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jorge.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De: &quot;Jorge D'Elia&quot; &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enviados: Martes, 12 de Agosto 2014 15:16:19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is already defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; De: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Para: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Enviado: Lunes, 11 de Agosto 2014 11:47:29
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `Lhwloc1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is already defined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem appears to be occurring in the hwloc component in OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you download hwloc 1.7.2 (standalone) and try to build that on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the target machine and see what happens?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/software/hwloc/v1.7/">http://www.open-mpi.org/software/hwloc/v1.7/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK. Just in case I tried both version 1.7.2 and 1.9 (stable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both gave no errors in the configuration or installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached a *.tgz file for each case. Greetings. Jorge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 10, 2014, at 11:16 AM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to re-compile Open MPI 1.8.1 version for Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on an ia32 machine with Fedora 14 although using the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; last version of Gfortran (Gfortran 4.10 is required
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by a user program which runs ok).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, the &quot;make all&quot; phase breaks with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I attached a tgz file (tar -zcvf) with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  The &quot;config.log&quot; file from the top-level Open MPI directory;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Outputs from cat /proc/version and cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please, any clue in order to fix?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jorge.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;symbol-already-defined.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24953.php">http://www.open-mpi.org/community/lists/users/2014/08/24953.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24975.php">http://www.open-mpi.org/community/lists/users/2014/08/24975.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25002.php">http://www.open-mpi.org/community/lists/users/2014/08/25002.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev2">&gt;&gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25005.php">http://www.open-mpi.org/community/lists/users/2014/08/25005.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25964.php">http://www.open-mpi.org/community/lists/users/2014/12/25964.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
