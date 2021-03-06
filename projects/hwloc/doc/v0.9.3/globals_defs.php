<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li class="current"><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="globals.php"><span>All</span></a></li>
      <li><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li class="current"><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&nbsp;<ul>
<li>hwloc_cpuset_foreach_begin
: <a class="el" href="group__hwlocality__cpuset.php#ga8f896ce703ad1740fdf9ce8ac6361359">cpuset.h</a>
</li>
<li>hwloc_cpuset_foreach_end
: <a class="el" href="group__hwlocality__cpuset.php#gae2974be78a7d7cddbd38cb23fcc6240a">cpuset.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_MULTIPLE
: <a class="el" href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d">hwloc.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_UNKNOWN
: <a class="el" href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e">hwloc.h</a>
</li>
<li>HWLOC_TYPE_UNORDERED
: <a class="el" href="group__hwlocality__types.php#ga3b6e4128e9fe773863b123fa6e4a080b">hwloc.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
