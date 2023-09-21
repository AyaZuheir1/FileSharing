<?php

namespace App\Listeners;
use App\Models\File;
use App\Events\FileDownloaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateFileDownloads
{
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
    public function handle(FileDownloaded $event)
    {
        $file = File::findOrFail($event->fileId);
    
        $file->downloads += 1;
        $file->save();
    }
}
