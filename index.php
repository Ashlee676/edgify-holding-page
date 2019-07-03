<?php

$html = file_get_contents(get_stylesheet_directory().'/index.html');

$output = str_replace('./',get_stylesheet_directory_uri().'/',$html);

echo $output;