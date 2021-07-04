<?php

namespace App\Repository;

use App\Models\Quote;

class QuoteRepo implements IQuoteRepo {

    public function all(): array 
    {
        // some database records using Eloquent
        $quotes = [
            new Quote([
                'quote' => 'If it were easy, everyone would do it',
                'author' => 'Tom Hanks'
            ]),
        ];

        return $quotes;
    }
}