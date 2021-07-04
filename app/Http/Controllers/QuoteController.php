<?php

namespace App\Http\Controllers;

use App\Repository\IQuoteRepo;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    private IQuoteRepo $quoteRepo;

    public function __construct(IQuoteRepo $quoteRepo)
    {
        $this->quoteRepo = $quoteRepo;
    }

    public function index() 
    {
        return response()->json([
            'status' => true,
            'message' => 'Query OK.',
            'data' => $this->quoteRepo->all(),
        ]);
    }
}
