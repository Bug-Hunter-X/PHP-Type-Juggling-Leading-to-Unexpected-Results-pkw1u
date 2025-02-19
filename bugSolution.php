```php
function my_function($a, $b) {
  if ($a === 0) {
    return $b;
  } else if(is_numeric($a) && is_numeric($b)){
    return $a + $b; 
  } else {
    return 'Error: Invalid input types';
  }
}

$result = my_function(0, 10);
echo $result; // Output: 10

$result = my_function(5, 10);
echo $result; // Output: 15

$result = my_function(0, 0);
echo $result; // Output: 0

//This will output an error because the input is not a number
$result = my_function(0, '10');
echo $result; // Output: Error: Invalid input types
```