<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessMessageWebhookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     */
    public function __construct() {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Run Artisan command with arguments
        \Artisan::call('whatsapp:webhooks:process', [
            'webhooksCount' => 10, // Adjust the count as needed
        ]);
        // Optionally log output
        $output = \Artisan::output();
        // __logDebug( $output);
        // \Log::info("Command '{$this->command}' Output:\n" . $output);
    }
}
