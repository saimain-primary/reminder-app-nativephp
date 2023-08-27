<?php

namespace App\Providers;

use App\Events\OpenAddReminderEvent;
use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->title('Reminder App')
            ->route('home')
            ->showDevTools(false)
            ->width(400)
            ->height(400);


        Menu::new()
            ->appMenu()
            ->submenu(
                'My Menu',
                Menu::new()
                ->event(OpenAddReminderEvent::class, 'Add Reminder', 'CmdOrCtrl+R')
                ->separator()
                ->quit()
            )
            ->register();

    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
