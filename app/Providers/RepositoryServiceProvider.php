<?php

namespace App\Providers;

use App\Repository\IQuoteRepo;
use App\Repository\QuoteRepo;
use App\Repository\QuoteRepoFile;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IQuoteRepo::class, QuoteRepoFile::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
