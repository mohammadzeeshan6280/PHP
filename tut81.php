<?php
// $str = "Hello <b>World</b>, Hello <i> Earth </i>";

// echo strip_tags($str);
// echo strip_tags($str, "<b>");

$str = "This world is beautiful";
// echo wordwrap($str, 4, "<br>");
echo wordwrap($str, 4, "<br>", TRUE);


?>