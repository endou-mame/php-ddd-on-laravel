<?php

declare(strict_types=1);

namespace packages\Domain\Book;

final readonly class Book
{
    public function __construct(
        public BookId $id,
        public BookTitle $title,
        public BookAuthor $author,
    ) {
    }

    public static function create(
        BookTitle $title,
        BookAuthor $author,
    ): self {
        return new self(
            id: BookId::generate(),
            title: $title,
            author: $author,
        );
    }
}
