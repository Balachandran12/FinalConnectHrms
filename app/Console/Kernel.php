<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Models\Schedule\Schedule as Shed;
use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            // dd(auth()->id());
            $recipient = User::find(1);
            $notify = Shed::all();
            foreach ($notify as $notifys) {
                $eventDate = Carbon::parse($notifys->event_date);
                $notifyAt = Carbon::parse($notifys->notify_at);
                $eventTime = date('h:i A', strtotime($notifys->event_time));
                $now = Carbon::now();
                $Author = User::where('id', $notifys->created_by)->first();

                if ($eventDate->isSameDay($now) && $notifyAt->format('H:i') === $now->format('H:i')) {
                    Notification::make()
                        // ->title('Reminder for the Meeting Scheduled at '. $notifys->event_time->format('H:i A'))
                        ->title('Reminder for ' . $notifys->name . ' Scheduled at ' . $eventTime . ' Today')
                        ->sendToDatabase($Author);
                } else {
                    // dd('nope');
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
