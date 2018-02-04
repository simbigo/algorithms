<?php

namespace Simbigo\PHPImplementation\Algorithms\Sorting;

/**
 * Class BubbleSortOptimized
 *
 * @see https://en.wikipedia.org/wiki/Bubble_sort
 */
class BubbleSortOptimized
{
    /**
     * @param array $items
     */
    public static function sort(array &$items): void
    {
        $limit = count($items);
        $swapped = true;
        while ($swapped) {
            $swapped = false;
            for ($i = 0; $i < $limit - 1; $i++) {
                if ($items[$i] > $items[$i + 1]) {
                    $swapped = true;

                    $swapTmp = $items[$i];
                    $items[$i] = $items[$i + 1];
                    $items[$i + 1] = $swapTmp;

                    // list($items[$j], $items[$j + 1]) = [$items[$j + 1], $items[$j]];

                    // or since version 7.1, you can use the following syntax
                    // [$items[$j], $items[$j + 1]] = [$items[$j + 1], $items[$j]];
                }
            }
            $limit--;
        }
    }
}