<?
$subject_val = "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 24 03:49:50 2010" -->
<!-- isoreceived="20100424074950" -->
<!-- sent="Sat, 24 Apr 2010 09:49:24 +0200" -->
<!-- isosent="20100424074924" -->
<!-- name="Krzysztof Zarzycki" -->
<!-- email="k.zarzycki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept" -->
<!-- id="h2v496e69ab1004240049u3a8f3cffw8cb39774694274ca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EB5C5F7-2910-49F6-9290-C81AF8AA333A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept<br>
<strong>From:</strong> Krzysztof Zarzycki (<em>k.zarzycki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-24 03:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12761.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12761.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
I'm Krzysztof and I'm working with Grzegorz Maj on this our small
<br>
project/experiment.
<br>
<p>We definitely would like to give your patch a try. But could you please
<br>
explain your solution a little more?
<br>
You still would like to start one mpirun per mpi grid, and then have
<br>
processes started by us to join the MPI comm?
<br>
It is a good solution of course.
<br>
But it would be especially preferable to have one daemon running
<br>
persistently on our &quot;entry&quot; machine that can handle several mpi grid starts.
<br>
Can your patch help us this way too?
<br>
<p>Thanks for your help!
<br>
Krzysztof
<br>
<p>On 24 April 2010 03:51, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In thinking about this, my proposed solution won't entirely fix the problem
</span><br>
<span class="quotelev1">&gt; - you'll still wind up with all those daemons. I believe I can resolve that
</span><br>
<span class="quotelev1">&gt; one as well, but it would require a patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you like me to send you something you could try? Might take a couple
</span><br>
<span class="quotelev1">&gt; of iterations to get it right...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2010, at 12:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm....I -think- this will work, but I cannot guarantee it:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. launch one process (can just be a spinner) using mpirun that includes
</span><br>
<span class="quotelev1">&gt; the following option:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -report-uri file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where file is some filename that mpirun can create and insert its contact
</span><br>
<span class="quotelev1">&gt; info into it. This can be a relative or absolute path. This process must
</span><br>
<span class="quotelev1">&gt; remain alive throughout your application - doesn't matter what it does. It's
</span><br>
<span class="quotelev1">&gt; purpose is solely to keep mpirun alive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. set OMPI_MCA_dpm_orte_server=FILE:file in your environment, where
</span><br>
<span class="quotelev1">&gt; &quot;file&quot; is the filename given above. This will tell your processes how to
</span><br>
<span class="quotelev1">&gt; find mpirun, which is acting as a meeting place to handle the connect/accept
</span><br>
<span class="quotelev1">&gt; operations
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now run your processes, and have them connect/accept to each other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reason I cannot guarantee this will work is that these processes will
</span><br>
<span class="quotelev1">&gt; all have the same rank &amp;&amp; name since they all start as singletons. Hence,
</span><br>
<span class="quotelev1">&gt; connect/accept is likely to fail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But it -might- work, so you might want to give it a try.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 23, 2010, at 8:10 AM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To be more precise: by 'server process' I mean some process that I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could run once on my system and it could help in creating those
</span><br>
<span class="quotelev3">&gt; &gt;&gt; groups.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My typical scenario is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. run N separate processes, each without mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. connect them into MPI group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. do some job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4. exit all N processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5. goto 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2010/4/23 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you Ralph for your explanation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; And, apart from that descriptors' issue, is there any other way to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; solve my problem, i.e. to run separately a number of processes,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; without mpirun and then to collect them into an MPI intracomm group?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If I for example would need to run some 'server process' (even using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun) for this task, that's OK. Any ideas?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Okay, but here is the problem. If you don't use mpirun, and are not
</span><br>
<span class="quotelev1">&gt; operating in an environment we support for &quot;direct&quot; launch (i.e., starting
</span><br>
<span class="quotelev1">&gt; processes outside of mpirun), then every one of those processes thinks it is
</span><br>
<span class="quotelev1">&gt; a singleton - yes?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What you may not realize is that each singleton immediately
</span><br>
<span class="quotelev1">&gt; fork/exec's an orted daemon that is configured to behave just like mpirun.
</span><br>
<span class="quotelev1">&gt; This is required in order to support MPI-2 operations such as
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn, MPI_Comm_connect/accept, etc.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So if you launch 64 processes that think they are singletons, then you
</span><br>
<span class="quotelev1">&gt; have 64 copies of orted running as well. This eats up a lot of file
</span><br>
<span class="quotelev1">&gt; descriptors, which is probably why you are hitting this 65 process limit -
</span><br>
<span class="quotelev1">&gt; your system is probably running out of file descriptors. You might check you
</span><br>
<span class="quotelev1">&gt; system limits and see if you can get them revised upward.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Apr 17, 2010, at 4:24 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Yes, I know. The problem is that I need to use some special way for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; running my processes provided by the environment in which I'm working
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and unfortunately I can't use mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Guess I don't understand why you can't use mpirun - all it does is
</span><br>
<span class="quotelev1">&gt; start things, provide a means to forward io, etc. It mainly sits there
</span><br>
<span class="quotelev1">&gt; quietly without using any cpu unless required to support the job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sounds like it would solve your problem. Otherwise, I know of no way
</span><br>
<span class="quotelev1">&gt; to get all these processes into comm_world.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Apr 17, 2010, at 2:27 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to dynamically create a group of processes communicating
</span><br>
<span class="quotelev1">&gt; via
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI. Those processes need to be run without mpirun and create
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; intracommunicator after the startup. Any ideas how to do this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; efficiently?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I came up with a solution in which the processes are connecting one
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; one using MPI_Comm_connect, but unfortunately all the processes
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; are already in the group need to call MPI_Comm_accept. This means
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; when the n-th process wants to connect I need to collect all the
</span><br>
<span class="quotelev1">&gt; n-1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processes on the MPI_Comm_accept call. After I run about 40
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; every subsequent call takes more and more time, which I'd like to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; avoid.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Another problem in this solution is that when I try to connect
</span><br>
<span class="quotelev1">&gt; 66-th
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; process the root of the existing group segfaults on
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe it's my bug, but it's weird as everything works fine for at
</span><br>
<span class="quotelev1">&gt; most
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 65 processes. Is there any limitation I don't know about?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; My last question is about MPI_COMM_WORLD. When I run my processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; without mpirun their MPI_COMM_WORLD is the same as MPI_COMM_SELF.
</span><br>
<span class="quotelev1">&gt; Is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; there any way to change MPI_COMM_WORLD and set it to the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; intracommunicator that I've created?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12761.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12761.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
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
