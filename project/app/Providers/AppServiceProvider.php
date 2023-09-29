<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    // Register the repository interface and implementation
    $this->app->bind(
      \App\Domain\Repositories\IBaseRepository::class,
      \App\Domain\Repositories\BaseRepository::class
    );
    $this->app->bind(
      \App\Domain\Repositories\IUserRepository::class,
      \App\Domain\Repositories\UserRepository::class
    );
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    //
  }
}
