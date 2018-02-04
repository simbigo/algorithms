<?php

namespace Simbigo\PHPImplementation\Algorithms\Sorting;

/**
 * Class BubbleSort
 *
 * @see https://en.wikipedia.org/wiki/Bubble_sort
 */
class BubbleSort
{
    /**
     * @param array $items
     */
    public static function sort(array &$items): void
    {
        $length = count($items);
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                if ($items[$j + 1] < $items[$j]) {
                    $swapTmp = $items[$j];
                    $items[$j] = $items[$j + 1];
                    $items[$j + 1] = $swapTmp;

                    // list($items[$j], $items[$j + 1]) = [$items[$j + 1], $items[$j]];

                    // or since version 7.1, you can use the following syntax
                    // [$items[$j], $items[$j + 1]] = [$items[$j + 1], $items[$j]];
                }
            }
        }
    }
}