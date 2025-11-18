 <?php
 $line = "Vim is the greatest word processor ever created! Oh vim, how I 
love thee!";

//echo preg_match("/\bVim\b/i", $line, $match);

 //if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";
 if (preg_match_all("/\bVim\b/i", $line, $match)) print "Match found!";

 print_r($match);
 ?>