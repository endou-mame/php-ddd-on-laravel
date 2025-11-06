<?php

declare(strict_types=1);

namespace packages\Application\Book\Register;

use packages\Domain\Book\Book;
use packages\Domain\Book\BookAuthor;
use packages\Domain\Book\BookTitle;
use packages\Domain\Book\IBookRepository;

final readonly class BookRegisterCommandHandler
{
    public function __construct(
        public IBookRepository $bookRepository,
    )
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
        $this->bookRepository->save($book);
    }
}
