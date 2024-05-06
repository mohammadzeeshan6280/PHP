<?php
// $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// echo htmlentities($str);


// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// echo $str . "<br> <br>";
// echo htmlentities($str);

// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// // $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// // echo htmlentities($str, ENT_QUOTES);


// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// // $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// echo htmlentities($str, ENT_NOQUOTES);

// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// // $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// // echo htmlspecialchars($str, ENT_QUOTES);
// echo htmlspecialchars($str, ENT_NOQUOTES);

// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// // $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// $htmllent = htmlentities($str, ENT_NOQUOTES);
// echo $htmllent;
// echo html_entity_decode($htmllent);


// $str = '<a href="http://www.whitehat.com">White Hat Website</a>';
// // $str = "A 'quot' <b> bold </b>";
// echo $str . "<br> <br>";
// $htmllent = htmlspecialchars($str, ENT_QUOTES);
// echo $htmllent;
// echo htmlspecialchars_decode($htmllent);

// echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
// echo "</pre>";

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";



?>

