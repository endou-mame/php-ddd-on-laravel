<?php

declare(strict_types=1);

namespace packages\Application\Book\BookBorrow;

final readonly class BookBorrowCommandHandler
{
    public function __construct()
    {
    }

    public function handle(BookBorrowCommand $command): void
    {
        // 本を取得
    }
}
