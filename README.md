# flatten-array
flattens nested php-arrays

# Usage
```php
include "flatten-array.php";
class Test
{
  $input = array(1, 2, [3, [4, 5], 6], 7);
  FlattenArray::flatten($input);
  // => [1, 2, 3, 4, 5, 6, 7]
}
```
