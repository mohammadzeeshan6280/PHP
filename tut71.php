<?php
// echo strcmp("Hello world!", "Hello world!");
// echo strcmp("Hello world!", "Hello");
// echo strcmp("Hello world!", "Hello world! Hello");


// echo strncmp("Hello world!", "Hello world! Hello", 6);
// echo strncmp("Hello world!", "hello world! Hello", 6);


// echo strcasecmp("HELLO world!", "hello world!");
// echo strcasecmp("HELLO world!", "hello world! Hello");


// echo strncasecmp("HELLO world!", "hello world! Hello", 5);


// echo strnatcmp("hello world!", "hello world!");
// echo strnatcmp("2hello world!", "10hello world!");
// echo strcmp("2hello world!", "10hello world!");
// echo strnatcmp("2hello world!", "2hello WORLD!");


// echo strnatcasecmp("2hello world!", "2hello WORLD!");

// echo substr_compare("hello world!", "world!", 6);
// echo substr_compare("hello world!", "World!", 6);
// echo substr_compare("hello world!", "world!", 0);
// echo substr_compare("hello world!", "world!", 0, 3);
// echo substr_compare("hello world!", "world!", 6, 3);
// echo substr_compare("hello world!", "world!", -2, 2);
// echo substr_compare("hello world!", "d!", -2, 2);
// echo substr_compare("hello worlD!", "d!", -2, 2, TRUE);
// echo substr_compare("hello worlD!", "d!", -2, 2);


// echo similar_text("hello worlD!", "Hello whitehat!"); 
echo similar_text("hello worlD!", "Hello whitehat!", $per);

echo " Percentage :" . $per;

?>