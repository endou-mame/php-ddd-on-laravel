<?php

declare(strict_types=1);

namespace packages\Application\Book\Register;

final readonly class BookRegisterCommand
{
    public function __construct(
        public string $bookTitle,
        public string $bookAuthor,
    ) {
    }
}
