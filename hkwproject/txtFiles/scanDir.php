<body>
<h1>File Processing</h1>
<hr />
<p>This is an example of a php application that gives list of files in a directory. </p>
<?php
$Dir = "www/hkwproject/.txt";
$DirEntries = scandir($Dir);
foreach ($DirEntries as $Entry) {
if ((strcmp($Entry, '.') != 0) && (strcmp($Entry, '..') != 0)) {
echo "<a href=\"$Dir\\$Entry\">" . $Entry . "</a><br />";
echo filesize($Dir."\\".$Entry)."<br /> \n";
} } ?>
</body>
