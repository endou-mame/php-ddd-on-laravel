<?php

declare(strict_types=1);

namespace packages\Application\Book\BookBorrow;

final readonly class BookBorrowCommand
{
    public function __construct(
        public string $bookId,
        public string $userId,
        public \DateTimeImmutable $borrowedAt,
    ) {
    }
}
