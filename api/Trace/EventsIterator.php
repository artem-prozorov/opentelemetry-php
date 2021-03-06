<?php

declare(strict_types=1);

namespace OpenTelemetry\Trace;

interface EventsIterator extends \Iterator
{
    public function key(): int;
    public function current(): Event;

    /**
     * Should be valid to call rewind as many times as desired UNTIL next() has been called; then it is implementation
     * defined whether it is valid or not. The implementation should throw if it cannot be rewound.
     */
    public function rewind(): void;
    public function valid(): bool;
    public function next(): void;
}
