<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reminder;
use Native\Laravel\Facades\Settings;
use Native\Laravel\Facades\Notification;

class AddReminder extends Component
{
    public $reminder = "";

    public function add()
    {

        Reminder::create([
            'reminder' => $this->reminder,
            'when' => now()->addMinutes(1)
        ]);

        Settings::set('reminderCount', Reminder::count());

        $this->reminder = "";
    }

    public function render()
    {
        return view('livewire.add-reminder');
    }
}
