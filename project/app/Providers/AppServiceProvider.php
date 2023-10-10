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
    // Factory::useNamespace
    \Illuminate\Database\Eloquent\Factories\Factory::guessFactoryNamesUsing(
      function (string $modelName) {
        $namespace = 'App\\Domain\\Entities';

        if (str_starts_with($modelName, $namespace)) {
            // エンティティに関連するファクトリを正しく解決する
            $relativeClass = str_replace($namespace . '\\', '', $modelName);
            return 'Database\\Factories\\' . $relativeClass . 'Factory';
        }

        return false; // 解決できない場合はfalseを返す
      }
    );
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
