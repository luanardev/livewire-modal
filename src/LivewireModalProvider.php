<?php

namespace Luanardev\LivewireModal;
use Luanardev\LivewireModal\LivewireModal;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;


class LivewireModalProvider extends ServiceProvider
{
   
	public function boot()
    {
        $this->registerViews();
        $this->registerDirectives();
        $this->registerPublishables();;
        $this->registerLivewireComponents();
    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-modal');
    }

    private function registerDirectives()
    {
        Blade::directive('livewireModalScript', function () {
            return '<script src="' . asset("/vendor/livewire-modal/modal.js") . '"></script>';
        });
		
		Blade::directive('livewireModal', function () {
            return '<livewire:livewire-modal/>';
        });
    }

    private function registerPublishables(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/livewire-modal'),
            ], 'livewire-modal:views');

            $this->publishes([
                __DIR__ . '/../resources/js' => public_path('vendor/livewire-modal'),
            ], 'livewire-modal:scripts');
        }
    }

    private function registerLivewireComponents(): void
    {
        Livewire::component('livewire-modal', LivewireModal::class);
    }

    
	
	
}
