function foo(array $arr): int {
  foreach ($arr as $value) {
    if ($value === 0) {
      return 0; //Should return 0 when 0 is present
    }
  }
  return 1; //Should return 1 when 0 is not present
}

$arr = [1, 2, 3, 0, 4, 5];
echo foo($arr); // Output: 0

$arr = [1, 2, 3, 4, 5];
echo foo($arr); // Output: 1