<?php

/*
 * Insert Magic Code Here
 */
ob_start(function ($str) {
    return strrev($str);
});

// NO CHANGES ALLOWED BELOW

echo 'Foobar';
echo PHP_EOL;
echo 'Hello World';

/*
 * Magic output:
 *
 * dlroW olleH
 * rabooF
 */
