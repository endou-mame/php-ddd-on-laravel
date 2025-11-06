<?php

declare(strict_types=1);

namespace Library\Tests\Book;

use packages\Application\Book\Register\BookRegisterCommand;
use packages\Application\Book\Register\BookRegisterCommandHandler;
use packages\Domain\Book\Book;
use packages\Domain\Book\BookRepositoryInMemory;
use Tests\TestCase;

class BorrowBookCommandHandlerTest extends TestCase{
    private BookRepositoryInMemory $bookRepository;
    private BookRegisterCommandHandler $commandHandler;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bookRepository = new BookRepositoryInMemory();
        $this->commandHandler = new BookRegisterCommandHandler($this->bookRepository);
    }

    public function testHandle(): void
    {
        $command = new BookRegisterCommand(
            bookTitle: 'DDD本',
            bookAuthor: '著者太郎',
        );

        $this->commandHandler->handle($command);

        $books = (new \ReflectionObject($this->bookRepository))->getProperty('books');
        $books->setAccessible(true);
        $storedBooks = $books->getValue($this->bookRepository);

        $this->assertCount(1, $storedBooks);
        $storedBook = array_values($storedBooks)[0];
        $this->assertInstanceOf(Book::class, $storedBook);
        $this->assertEquals('DDD本', (string)$storedBook->title);
        $this->assertEquals('著者太郎', (string)$storedBook->author);
    }
}
