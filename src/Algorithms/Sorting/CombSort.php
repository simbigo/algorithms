<?php

namespace Simbigo\PHPImplementation\Algorithms\Sorting;

/**
 * Class CombSort
 *
 * @see https://en.wikipedia.org/wiki/Comb_sort
 */
class CombSort
{
    /**
     * @param array $items
     */
    public static function sort(array &$items): void
    {
        $gap = $length = count($items);
        $swapped = true;
        while ($gap > 1 || $swapped) {
            if ($gap > 1) {
                $gap = floor($gap / 1.24733); // magic number. See algorithm description
            }
            $i = 0;
            $swapped = false;
            while ($i + $gap < $length) {
                if ($items[$i] > $items[$i + $gap]) {
                    $swapped = true;

                    $swapTmp = $items[$i];
                    $items[$i] = $items[$i + $gap];
                    $items[$i + $gap] = $swapTmp;

                    // list($items[$i], $items[$i + $gap]) = [$items[$i + $gap], $items[$i]];

                    // or since version 7.1, you can use the following syntax
                    // [$items[$i], $items[$i + $gap]] = [$items[$i + $gap], $items[$i]];
                }
                $i++;
            }
        }
    }
}