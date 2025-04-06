<?php

include_once 'AnagramChecker.php';

$checker = new AnagramChecker();

// Example 1: Anagram check
$str1 = "Listen";
$str2 = "Silent";

if ($checker->checkAnagram($str1, $str2)) {
    echo "$str1 and $str2 are anagrams!";
} else {
    echo "$str1 and $str2 are not anagrams.";
}

// Example 2: Non-anagram check
$str1 = "Hello";
$str2 = "World";

if ($checker->checkAnagram($str1, $str2)) {
    echo "$str1 and $str2 are anagrams!";
} else {
    echo "$str1 and $str2 are not anagrams.";
}
