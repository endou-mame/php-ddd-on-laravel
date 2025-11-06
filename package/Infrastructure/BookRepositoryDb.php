<?php

declare(strict_types=1);

namespace packages\Domain\Book;

use Override;

class BookRepositoryInMemory implements IBookRepository
{
    private array $books = [];

    #[Override]
    public function save(Book $book): void
    {
        $this->books[(string)$book->id] = $book;
    }

    #[Override]
    public function findById(BookId $id): ?Book
    {
        return $this->books[(string)$id] ?? null;
    }
}
