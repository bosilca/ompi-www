<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 15:04:46 2012" -->
<!-- isoreceived="20121031190446" -->
<!-- sent="Wed, 31 Oct 2012 12:04:38 -0700" -->
<!-- isosent="20121031190438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="8A59DBB2-892D-4B4E-B10E-376F2A272541_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16qNe7C_sKUZ4qiEmz4tOYzTKR4RAJdOAC+6EUZ-rtJpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 15:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11711.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood, but also remember that the national labs don't have Mac clusters - and so they couldn't care less about Clang. The concerns over these changes were from the national labs, so my point was that this discussion may all be irrelevant.
<br>
<p><p>On Oct 31, 2012, at 11:47 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that with Apple's latest versions of Xcode (4.2 and higher, IIRC) Clang is now the default C compiler.  I am told that Clang is the ONLY bundled compiler for OSX 10.8 (Mountain Lion) unless you take extra steps to install gcc (which is actually llvm-gcc and cross-compiles for OSX 10.7).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, Clang *is* gaining some &quot;market share&quot;, though not yet in major HPC systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 31, 2012 at 11:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If it's only on for Clang, I very much doubt anyone will care - I'm unaware of any of our users that currently utilize that compiler, and certainly not on the clusters in the national labs (gcc, Intel, etc. - but I've never seen them use Clang).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not saying anything negative about Clang - just noting it isn't much used in our current community that I've heard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 11:19 AM, Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 31, 2012 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 31, 2012, at 9:38 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The rationale here is that correct MPI applications should not need to add any extra compiler files to compile without warnings.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I would disagree with this.  Compiler warnings are most useful when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; they are on by default.  Only a few developers will turn on a warning
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; because warnings are hard to discover and enabling a warning requires
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; an explicit action from the developer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Understood, but:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a) MPI explicitly allows this kind of deliberate mismatch.  It does not make sense to warn for things that are correct in MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think it is MPI.  It is the C standard that allows one to
</span><br>
<span class="quotelev2">&gt; &gt; store any pointer in void* and char*.  But C standard also considers
</span><br>
<span class="quotelev2">&gt; &gt; lots of other weird things to be valid, see below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; b) Warnings are significantly less useful if the user looks at them and says, &quot;the compiler is wrong; I know that MPI says that this deliberate mismatch in my code is ok.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, one can also argue that since the following is valid C, the
</span><br>
<span class="quotelev2">&gt; &gt; warning in question should not be implemented at all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; long *b = malloc(sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv(b, 1, MPI_INT, ...);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But this code is clearly badly written, so we are left with a question
</span><br>
<span class="quotelev2">&gt; &gt; about where to draw the line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; c) as such, these warnings are really only useful for the application where type/MPI_Datatype matching is expected/desired.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compilers already warn about valid C code.  Silencing many warnings
</span><br>
<span class="quotelev2">&gt; &gt; relies on conventions that are derived from best practices of being
</span><br>
<span class="quotelev2">&gt; &gt; explicit about something unusual.  For example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat /tmp/aaa.c
</span><br>
<span class="quotelev2">&gt; &gt; void foo(void *a) {
</span><br>
<span class="quotelev2">&gt; &gt;  for(int i = a; i &lt; 10; i++)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    if(i = 5)
</span><br>
<span class="quotelev2">&gt; &gt;      return;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; $ clang -fsyntax-only -std=c99 /tmp/aaa.c
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/aaa.c:2:11: warning: incompatible pointer to integer conversion
</span><br>
<span class="quotelev2">&gt; &gt; initializing 'int' with an expression of type 'void *'
</span><br>
<span class="quotelev2">&gt; &gt; [-Wint-conversion]
</span><br>
<span class="quotelev2">&gt; &gt;  for(int i = a; i &lt; 10; i++)
</span><br>
<span class="quotelev2">&gt; &gt;          ^   ~
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/aaa.c:4:10: warning: using the result of an assignment as a
</span><br>
<span class="quotelev2">&gt; &gt; condition without parentheses [-Wparentheses]
</span><br>
<span class="quotelev2">&gt; &gt;    if(i = 5)
</span><br>
<span class="quotelev2">&gt; &gt;       ~~^~~
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/aaa.c:4:10: note: place parentheses around the assignment to
</span><br>
<span class="quotelev2">&gt; &gt; silence this warning
</span><br>
<span class="quotelev2">&gt; &gt;    if(i = 5)
</span><br>
<span class="quotelev2">&gt; &gt;         ^
</span><br>
<span class="quotelev2">&gt; &gt;       (    )
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/aaa.c:4:10: note: use '==' to turn this assignment into an
</span><br>
<span class="quotelev2">&gt; &gt; equality comparison
</span><br>
<span class="quotelev2">&gt; &gt;    if(i = 5)
</span><br>
<span class="quotelev2">&gt; &gt;         ^
</span><br>
<span class="quotelev2">&gt; &gt;         ==
</span><br>
<span class="quotelev2">&gt; &gt; 2 warnings generated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; According to C standard this is valid C code, but clang emits two
</span><br>
<span class="quotelev2">&gt; &gt; warnings on this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can these warnings be enabled as part of the warnings rollup -Wall option?  That would be an easy way to find/enable these warnings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IIRC, -Wall warning set is frozen in clang.  -Wall is misleading in
</span><br>
<span class="quotelev2">&gt; &gt; that it does not turn on all warnings implemented in the compiler.
</span><br>
<span class="quotelev2">&gt; &gt; Clang has -Weverything to really turn on all warnings.  But
</span><br>
<span class="quotelev2">&gt; &gt; -Weverything is very noisy (by design, not to be fixed) unless one
</span><br>
<span class="quotelev2">&gt; &gt; also turns off all warnings that are not interesting for the project
</span><br>
<span class="quotelev2">&gt; &gt; with -Wno-foo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think it is possible to disable this warning by default
</span><br>
<span class="quotelev2">&gt; &gt; because off-by-default warnings are discouraged in Clang.  There is no
</span><br>
<span class="quotelev2">&gt; &gt; formal policy, but the rule of thumb is: either make the warning good
</span><br>
<span class="quotelev2">&gt; &gt; enough for everyone or don't implement it; if some particular app does
</span><br>
<span class="quotelev2">&gt; &gt; something strange, it can disable this warning.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The pattern you described is an important one, but most MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; applications will have matching buffer types/type tags.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I agree that most applications *probably* don't do this.  But significant developer in this community (i.e., Sandia) has at least multiple applications that *do* do it.  I can't ignore that.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are a few approaches to solving this in order of preference:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 0. Is this really a concern for Sandia?  (I.e., do they target Clang?)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Ask the developer to silence the warning with a cast to 'void *' or
</span><br>
<span class="quotelev2">&gt; &gt; -Wno-type-safety.  Rationale: compilers already do warn about valid
</span><br>
<span class="quotelev2">&gt; &gt; but suspicious code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Turn off checking for char* just like for void*.  Rationale: C
</span><br>
<span class="quotelev2">&gt; &gt; standard allows char* to alias a pointer of any type.  Note that char*
</span><br>
<span class="quotelev2">&gt; &gt; is special in this regard (strict aliasing rules).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Turn off annotations by default in mpi.h.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dmitri
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev2">&gt; &gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11710.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11711.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
