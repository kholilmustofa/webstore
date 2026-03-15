<?php

namespace App\Listeners;

use App\Events\SalesOrderCancelledEvent;
use App\Mail\SalesOrderCancelledMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SalesOrderCancelledListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SalesOrderCancelledEvent $event): void
    {
        Mail::queue(
            new SalesOrderCancelledMail($event->sales_order)
        );
    }
}
