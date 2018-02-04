<?php

namespace Simbigo\PHPImplementation\Algorithms\Sorting;

/**
 * Class CountingSort
 */
class CountingSort
{
    /**
     * @param array $items
     */
    public static function sort(array &$items): void
    {
        if ($items === []) {
            return;
        }

        $max = max($items);
        $min = min($items);

        $counters = [];
        foreach ($items as $value) {
            if (!isset($counters[$value])) {
                $counters[$value] = 0;
            }
            $counters[$value]++;
        }

        $result = [];
        for ($value = $min; $value <= $max; $value++) {
            if (isset($counters[$value])) {
                $count = $counters[$value];
                $j = 0;
                while ($j < $count) {
                    $result[] = $value;
                    $j++;
                }

            }
        }

        $items = $result;
    }
}