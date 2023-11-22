<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tonysm\TurboLaravel\Http\PendingTurboStreamResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PendingTurboStreamResponse::macro('updateCount', function (int $count) {
            return $this->target('todo-count')
                ->action('update')
                ->view('to_dos._count', ['todosTotal' => $count]);
        });
    }
}
