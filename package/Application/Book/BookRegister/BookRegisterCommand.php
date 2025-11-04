<?php

declare(strict_types=1);

namespace packages\Application\Book\BookRegister;

final readonly class BookRegisterCommand
{
    public function __construct(
        public string $bookTitle,
        public string $bookAuthor,
    ) {
    }
}
