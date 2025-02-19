# PHP Type Juggling Bug

This repository demonstrates a common issue in PHP related to type juggling and loose comparison. The `my_function` in `bug.php` uses loose comparison (`==`), which can lead to unexpected behavior when different data types are involved. The solution in `bugSolution.php` uses strict comparison (`===`) to prevent type juggling and ensure the function behaves as expected.