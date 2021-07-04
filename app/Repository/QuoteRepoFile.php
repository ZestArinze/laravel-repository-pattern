<?php

namespace App\Repository;

class QuoteRepoFile implements IQuoteRepo {

    public function all(): array 
    {
        // some file data
        $quotes = [
            [
                'quote' => 'If it were easy, everyone would do it',
                'author' => 'Tom Hanks'
            ],
            [
                'quote' => 'I decided to remain a fool when I discovered the wisdom of men.',
                'author' => 'Arinze A.'
            ],
        ];

        return $quotes;
    }
}