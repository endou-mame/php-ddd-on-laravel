<?php

declare(strict_types=1);

namespace packages\Domain\Book;

final readonly class BookId
{
    public function __construct(
        public string $value,
    ) {
        // ULID
        if (!preg_match('/^[0-9a-z]{26}$/', $value)) {
            throw new \InvalidArgumentException('Invalid Book ID format.');
        }
        if (strlen($value) !== 26) {
            throw new \InvalidArgumentException('Book ID must be 26 characters long.');
        }
    }

    public static function generate(): self
    {
        // Generate a ULID
        $ulid = \Symfony\Component\Uid\Ulid::generate();
        return new self($ulid);
    }
}
