<?php

declare(strict_types=1);

namespace packages\Application\Book\BookRegister;

use packages\Domain\Book\Book;
use packages\Domain\Book\BookAuthor;
use packages\Domain\Book\BookTitle;

final readonly class BookRegisterCommandHandler
{
    public function __construct()
    {
    }

    public function handle(BookRegisterCommand $command): void
    {
        // 本を取得
        $bookTitle = new BookTitle($command->bookTitle);
        $bookAuthor = new BookAuthor($command->bookAuthor);
        $book  = Book::create(
            title: $bookTitle,
            author: $bookAuthor,
        );
    }
}
