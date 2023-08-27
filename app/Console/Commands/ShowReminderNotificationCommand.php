<?php

namespace App\Console\Commands;

use App\Models\Reminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Native\Laravel\Facades\Notification;

class ShowReminderNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notification-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reminders = Reminder::where('when', "<=", now())->where('notified', false)->get();

        Log::debug($reminders);
        $reminders->each(function ($reminder) {
            $reminder->update(['notified' => true]);
            Notification::title('This is to remind you that')
            ->message('Your reminder - ' . $reminder->reminder . ' - is due.')
            ->show();
        });

    }
}
