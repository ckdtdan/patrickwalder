<?php
 echo "<section>";
 $verzeichnis="docs";
 $path=opendir($verzeichnis); 
 echo "<h1>Dokumente</h1>";
 echo "<ul>";
 while ($file = readdir ($path)) {
	if ($file != "." && $file != "..") {
		echo"<li>";
		echo "<a href=\"$verzeichnis\/$file\">$file</a><br /><br />";
		echo "</li>";
	}
}
 echo "</ul>";
 echo "</section>";
?>