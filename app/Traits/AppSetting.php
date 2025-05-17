<?php

namespace App\Traits;

use App\Models\Setting\Setting;

trait AppSetting
{
    public static function getSetting($key)
    {
        return Setting::where('key', $key)->whereIsActive(1)->value('value');
    }
}
