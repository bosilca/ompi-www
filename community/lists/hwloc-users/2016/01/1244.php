<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 10:59:18 2016" -->
<!-- isoreceived="20160107155918" -->
<!-- sent="Thu, 7 Jan 2016 10:59:14 -0500" -->
<!-- isosent="20160107155914" -->
<!-- name="David Winslow" -->
<!-- email="david.winslow_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344" -->
<!-- id="45CECE6E-4D60-4A6F-A9A3-B738C70F828B_at_serendipitynow.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="568E8465.5050000_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344<br>
<strong>From:</strong> David Winslow (<em>david.winslow_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 10:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1243.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>In reply to:</strong> <a href="1243.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the help. I successfully created the XML from a good machine and used it on the buggy machine. Both lstopo and hwloc-info report correctly and I no longer get the error when running MPI.
<br>
<p><p>David
<br>
<p><p><span class="quotelev1">&gt; On Jan 7, 2016, at 10:29 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two ways to workaround the issue:
</span><br>
<span class="quotelev1">&gt; * run &quot;lstopo foo.xml&quot; on a node that doesn't have the bug and do export
</span><br>
<span class="quotelev1">&gt; HWLOC_XMLFILE=foo.xml and HWLOC_THISSYSTEM=1 on buggy nodes. (that's
</span><br>
<span class="quotelev1">&gt; what you call a &quot;map&quot; below). Works with very old hwloc releases.
</span><br>
<span class="quotelev1">&gt; * export HWLOC_COMPONENTS=x86 (only works since hwloc &gt;= 1.11.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 07/01/2016 16:20, David Winslow a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Brice,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the information! It&#146;s good to know it wasn&#146;t a flaw in the upgrade. This bug must have been introduced in kernel 3.x. I ran lstopo on on of our servers that still have Centos 6.5 and it correctly reports L3 cache for every 6 cores as shown below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have 75 servers with the exact same specifications. I have only upgraded two when I came across this problem during testing. Since I have a correct map on the non-upgraded servers, can I use that map on the upgraded servers somehow? Essentially hard code it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------- FROM Centos 6.5 -----------------------
</span><br>
<span class="quotelev2">&gt;&gt;  Socket L#0 (P#0 total=134215604KB CPUModel=&quot;AMD Opteron(tm) Processor 6344                 &quot; CPUType=x86_64)
</span><br>
<span class="quotelev2">&gt;&gt;    NUMANode L#0 (P#0 local=67106740KB total=67106740KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L3Cache L#0 (size=6144KB linesize=64 ways=64)
</span><br>
<span class="quotelev2">&gt;&gt;        L2Cache L#0 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;          L1iCache L#0 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#0 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#1 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;        L2Cache L#1 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;          L1iCache L#1 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#2 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#3 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;        L2Cache L#2 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;          L1iCache L#2 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#4 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;            L1dCache L#5 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev2">&gt;&gt;              Core L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                PU L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 7, 2016, at 1:22 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a kernel bug for 12-core AMD Bulldozer/Piledriver (62xx/63xx) processors. hwloc is just complaining about buggy L3 information. lstopo should report one L3 above each set of 6 cores below each NUMA node. Instead you get strange L3s with 2, 4 or 6 cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you're not binding tasks based on L3 locality and if your applications do not care about L3, you can pass HWLOC_HIDE_ERRORS=1 in the environment to hide the message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMD was working on a kernel patch but it doesn't seem to be in the upstream Linux yet. In hwloc v1.11.2, you can workaround the problem by passing HWLOC_COMPONENTS=x86 in the environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure why CentOS 6.5 didn't complain. That 2.6.32 kernel should be buggy too, and old hwloc releases already complained about such bugs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 07/01/2016 04:10, David Winslow a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I upgraded our servers from Centos 6.5 to Centos7.2. Since then, when I run mpirun I get the following error but the software continues to run and it appears to work fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * hwloc 1.11.0rc3-git has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Error occurred in topology.c line 983
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * The following FAQ entry in the hwloc documentation may help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   What should I do when hwloc reports &quot;operating system&quot; warnings?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Otherwise please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * along with the output+tarball generated by the hwloc-gather-topology script.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can replicate the error by simply running hwloc-info.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The version of hwloc used with mpirun is 1.9. The version installed on the server that I ran is 1.7 that comes with Centos 7. They both give the error with minor differences shown below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With hwloc 1.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * object (L3 cpuset 0x000003f0) intersection without inclusion!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Error occurred in topology.c line 753
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With hwloc 1.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Error occurred in topology.c line 983
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The current kernel is 3.10.0-327.el7.x86_64. I&#146;ve tried updating the kernel to a minor release update and even tried to install kernel v4.4.3. None of the kernels worked. Again, hwloc works fine in Centos 6.5 with kernel 2.6.32-431.29.2.el6.x86_64.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ve attached the files generated by hwloc-gather-topology.sh.  I compared what this script says is the expected output to the actual output and, from what I can tell, they look the same. Maybe I&#146;m missing something after staring all day at the information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did a clean install of the OS to perform the upgrade from 6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ve attached the results of the hwloc-gather-topology.sh script. Any help will be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1238.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1238.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1240.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1240.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1243.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1243.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1244.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1244.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1243.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>In reply to:</strong> <a href="1243.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<!-- nextthread="start" -->
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
