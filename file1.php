<?php
/**
 * Calculates sum of squares of an array
 *
 * Loops over each element in the array, squares it, and adds it to 
 * total. Returns total.
 * 
 * This function can also be implemented using array_reduce();
 * 
 * @param array $arr
 * @return int
 * @throws Exception If element in array is not an integer
 */
function sumOfSquares($arr) {
    $total = 0;
    foreach ($arr as $val) {
        if (!is_int($val)) {
            throw new Exception("Element is not an integer!");
        }
        $total += $val * $val;
    }
    return $total;
}


/**
 * This is a class-level DocBlock
 * 
 * @package    Some_Package
 * @subpackage Other
 */
class SomeClass {
}

/**
 * An example class
 *
 * The class is empty for the sake of this example.
 *
 * @package    MyProject
 * @subpackage Common
 * @author     Moshe Teutsch <moteutsch@gmail.com>
 */
class Example {
}