<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'PC',
            'slug' => 'pc',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tags')->insert([
            'name' => 'XBOX ONE',
            'slug' => 'xbox-one',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tags')->insert([
            'name' => 'PS4',
            'slug' => 'ps4',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tags')->insert([
            'name' => 'NINTENDO SWITCH',
            'slug' => 'nintendo-switch',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);
    }
}
