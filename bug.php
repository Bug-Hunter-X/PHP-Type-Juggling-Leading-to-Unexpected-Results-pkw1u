```php
function my_function($a, $b) {
  if ($a === 0) {
    return $b;
  } else {
    return $a + $b; 
  }
}

$result = my_function(0, 10);
echo $result; // Output: 10

$result = my_function(5, 10);
echo $result; // Output: 15

$result = my_function(0, 0); //This will output 0, however, this is a common mistake
echo $result; // Output: 0

//This is the buggy part, as this will output an unexpected result
$result = my_function(0, '10');
echo $result; // Output: 10, expected output is an error
```