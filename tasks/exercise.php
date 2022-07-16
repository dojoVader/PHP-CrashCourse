<?php

// Remove the Bad text from the Sample screen
// $sample_string = "
// 'Tomorrow I \'ll learn PHP global variables.'
// 'This is a bad command : del c:\\*.*'";

// $replaced_string = str_replace("del c:\\*.*'", '', $sample_string);
// echo $replaced_string;

// Reading from a file and pasting the content

if (file_exists('./file.txt')) {
    $file = file_get_contents('./file.txt');
    echo $file;
} else {
    echo 'File does not exist';
}
