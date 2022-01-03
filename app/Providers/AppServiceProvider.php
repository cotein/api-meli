<?php

namespace App\Providers;

use App\User;
use App\Src\Models\Product;
use App\Src\Models\Category;
use App\Src\Models\Supplier;
use App\Src\Models\AfipToken;
use App\Src\Models\MeliToken;
use Laravel\Passport\Passport;
use App\Observers\UserObserver;
use App\Observers\ProductObserver;
use App\Observers\CategoryObserver;
use App\Observers\SupplierObserver;
use App\Observers\AfipTokenObserver;
use App\Observers\MeliTokenObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        User::observe(UserObserver::class);

        Product::observe(ProductObserver::class);

        MeliToken::observe(MeliTokenObserver::class);

        Category::observe(CategoryObserver::class);

        AfipToken::observe(AfipTokenObserver::class);

        Supplier::observe(SupplierObserver::class);


    }
}
