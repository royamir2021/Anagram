


<?php

class AnagramChecker {

    // Method to check if two strings are anagrams
    public function checkAnagram($str1, $str2) {
        // Remove spaces and convert to lowercase for case-insensitivity
        $str1 = strtolower(str_replace(' ', '', $str1));
        $str2 = strtolower(str_replace(' ', '', $str2));

        // If lengths don't match, they cannot be anagrams
        if (strlen($str1) != strlen($str2)) {
            return false;
        }

        // Count the frequency of each character in both strings
        $charCount1 = count_chars($str1, 1);
        $charCount2 = count_chars($str2, 1);

        // Compare the frequency counts
        return $charCount1 === $charCount2;
    }
}
