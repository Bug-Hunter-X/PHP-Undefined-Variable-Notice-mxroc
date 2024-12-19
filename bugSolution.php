Several ways exist to solve the undefined variable problem. Here are two using `isset()` and null coalescing:

**Using `isset()`:**
```php
<?php
if (isset($name)) {
    echo "Hello, " . $name . "!";
} else {
    echo "Hello, guest!"; // Or handle the absence of a name appropriately
}
?>
```

**Using Null Coalescing:**
```php
<?php
echo "Hello, " . ($name ?? 'guest') . "!";
?>
```
The null coalescing operator (`??`) provides a default value ('guest' in this case) if `$name` is undefined or null.  This is a cleaner and more concise solution in many situations.