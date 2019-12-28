<?php

use Backpack\Settings\app\Models\Setting;

function settingValue($settingKey = "")
{
	return ($settingKey != "") ? Setting::get($settingKey) : "";
}
