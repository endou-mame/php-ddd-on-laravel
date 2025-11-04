<?php

declare(strict_types=1);

namespace packages\Domain\Book;


final readonly class BookAuthor
{
    public function __construct(
        public string $value,
    ) {
    }
}
