<?php

declare(strict_types=1);

namespace packages\Domain\Book;

final readonly class BookAuthor
{
    public function __construct(
        public string $value,
    ) {
        if ($value === '') {
            throw new \InvalidArgumentException('Book author cannot be empty.');
        }
        if (mb_strlen($value) > 255) {
            throw new \InvalidArgumentException('Book author cannot exceed 255 characters.');
        }
    }
}
