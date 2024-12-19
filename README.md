# PHP Undefined Variable Notice

This repository demonstrates a common PHP error: the undefined variable notice.  The `bug.php` file showcases the error, while `bugSolution.php` provides corrected versions using `isset()` and the null coalescing operator.

The error arises when a variable is used before it's been assigned a value.  While not always fatal, it can produce unexpected results and clutter error logs.  The solutions presented show best practices for handling potential undefined variables.

## Usage

1. Clone the repository.
2. Run `bug.php` to see the undefined variable notice (you'll need a PHP environment).
3. Run `bugSolution.php` to see the corrected code using best practices.