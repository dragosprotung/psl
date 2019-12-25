<?php

declare(strict_types=1);

namespace Psl\Arr;

/**
 * Get the last value of an array, if the array is empty, returns null.
 *
 * @psalm-template Tk as array-key
 * @psalm-template Tv
 *
 * @psalm-param array<Tk, Tv> $array
 *
 * @psalm-return null|Tv
 *
 * @psalm-pure
 */
function last(array $array)
{
    /** @psalm-var null|Tk $last */
    $last = last_key($array);
    if (null === $last) {
        return null;
    }

    /** @psalm-var null|Tv */
    return at($array, $last);
}