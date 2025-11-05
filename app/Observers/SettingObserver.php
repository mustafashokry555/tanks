<?php

namespace App\Observers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingObserver
{
    /**
     * Handle the Setting "created" event.
     */
    public function created(Setting $setting): void
    {
        Cache::forget('setting_ar');
        Cache::forget('setting_en');
    }

    /**
     * Handle the Setting "updated" event.
     */
    public function updated(Setting $setting): void
    {
        Cache::forget('setting_ar');
        Cache::forget('setting_en');
    }

    /**
     * Handle the Setting "deleted" event.
     */
    public function deleted(Setting $setting): void
    {
        Cache::forget('setting_ar');
        Cache::forget('setting_en');
    }
}
