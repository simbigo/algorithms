<?php

namespace Simbigo\PHPImplementation\Tests\Algorithms\Sorting;

use PHPUnit\Framework\TestCase;
use Simbigo\PHPImplementation\Algorithms\Sorting\CombSort;

/**
 * Class CombSort
 */
class CombSortTest extends TestCase
{
    /**
     * @param $unsorted
     * @param $sorted
     * @dataProvider equalsDataProvider()
     */
    public function testSortEqual($unsorted, $sorted): void
    {
        CombSort::sort($unsorted);

        $this->assertEquals($sorted, $unsorted);
    }

    /**
     * @param $unsorted
     * @param $sorted
     * @dataProvider notEqualsDataProvider()
     */
    public function testSortNotEqual($unsorted, $sorted): void
    {
        CombSort::sort($unsorted);

        $this->assertNotEquals($sorted, $unsorted);
    }

    /**
     * @return array
     */
    public function equalsDataProvider(): array
    {
        return [
            [
                [],
                [],
            ],
            [
                [1],
                [1],
            ],
            [
                [1, 3, 5],
                [1, 3, 5],
            ],
            [
                [1, 5, 65, 23, 57, 1232, -1, -5, -2, 242, 100, 4, 423, 2, 564, 9, 0, 10, 43, 64, 32, 1, 999],
                [-5, -2, -1, 0, 1, 1, 2, 4, 5, 9, 10, 23, 32, 43, 57, 64, 65, 100, 242, 423, 564, 999, 1232],
            ],
            [
                ['lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipisicing'],
                ['adipisicing', 'amet', 'consectetur', 'dolor', 'ipsum', 'lorem', 'sit'],
            ],
        ];
    }

    /**
     * @return array
     */
    public function notEqualsDataProvider(): array
    {
        return [
            [
                [],
                [1],
            ],
            [
                [1],
                [0],
            ],
            [
                [1, 3, 5],
                [5, 3, 1],
            ],
            [
                [1, 5, 23, -1, -5, -2, 0, 10],
                [10, 0, -2, -5, -1, 23, 5, 1],
            ],
            [
                ['lorem', 'ipsum', 'dolor'],
                ['lorem', 'dolor', 'ipsum'],
            ],
        ];
    }
}