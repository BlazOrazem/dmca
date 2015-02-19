<?php

use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder {

	public function run()
	{
		$items = [
			['id' => '1', 'name' => 'YouTube', 'copyright_email' => 'youtube@mailinator.com'],
			['id' => '2', 'name' => 'Vimeo', 'copyright_email' => 'vimeo@mailinator.com'],
			['id' => '3', 'name' => 'Vevo', 'copyright_email' => 'vevo@mailinator.com'],
			['id' => '4', 'name' => 'Dailymotion', 'copyright_email' => 'dailymotion@mailinator.com'],
			['id' => '5', 'name' => 'Veoh', 'copyright_email' => 'veoh@mailinator.com'],
			['id' => '6', 'name' => 'Metacafe', 'copyright_email' => 'metacafe@mailinator.com'],
			['id' => '7', 'name' => 'Flickr', 'copyright_email' => 'flickr@mailinator.com'],
			['id' => '8', 'name' => 'Break', 'copyright_email' => 'break@mailinator.com'],
		];

		DB::table('providers')->insert($items);
	}

}