<?php

use Illuminate\Database\Seeder;

class Settings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('settings')->insert([
			'key'           => 'admin_color_theme',
			'name'          => 'Admin theme',
			'description'   => 'Admin color them \"dark\" or \"soft\".',
			'value'         => 'dark',
			'field'         => '{"name":"value", "label":"Admin Theme", "type":"radio", "options": { "dark":"Dark", "soft":"Soft" }, "inline":"true"}',
			'active'        => 1,
		]);
    }
}
