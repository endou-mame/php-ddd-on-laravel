<?php

declare(strict_types=1);

namespace packages\Domain\Book;

interface IBookRepository
{
    public function save(Book $book): void;
    public function findById(BookId $id): ?Book;
}
