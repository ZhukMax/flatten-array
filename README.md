# flatten-array
flattens nested php-arrays

# Usage
```php
include "flatten-array.php";
class Test()
{
  use FlattenTrait;

  $this->flatten([1, 2, [3, [4, 5], 6], 7]);
  // => [1, 2, 3, 4, 5, 6, 7]
}
```
