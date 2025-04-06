```bash
cd anagram-checker
```

2. **Install Dependencies** (if any):

If there are dependencies or composer packages, you can install them using:

```bash
composer install
```

---

## 🔧 **Usage**

To use the `AnagramChecker` class, follow these steps:

1. **Include the Class**: Include the `AnagramChecker.php` file in your project.

```php
include_once 'AnagramChecker.php';
```

2. **Create an Instance**: Instantiate the `AnagramChecker` class.

```php
$checker = new AnagramChecker();
```

3. **Check Anagram**: Use the `checkAnagram` method to check if two strings are anagrams.

```php
$result = $checker->checkAnagram("listen", "silent");

if ($result) {
    echo "The strings are anagrams!";
} else {
    echo "The strings are not anagrams.";
}
```

---

## 🧑‍💻 **Code Implementation**

```php
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
```

---

## 🚀 **Example**

Here is a practical example of how to use the `AnagramChecker` class:

```php
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
```

---

## 📝 **How It Works**

- The `checkAnagram` method:
  1. Removes any spaces and converts the strings to lowercase to make the comparison case-insensitive.
  2. Checks if the lengths of the strings match. If they don’t, they can’t be anagrams.
  3. Uses `count_chars` to count the frequency of each character in the strings and compares them.
  4. Returns `true` if the character frequencies match, otherwise returns `false`.

---

## 🌐 **Contributing**

If you’d like to contribute to this project, feel free to fork it and submit pull requests. Here are some ways you can help:
- Improve the performance
- Add more test cases
- Enhance the documentation

---

## 📚 **License**

This project is open-source and is licensed under the MIT License.

---

Happy coding! 🚀
