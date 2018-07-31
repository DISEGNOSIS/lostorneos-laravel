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
            'name' => 'Novedades',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tags')->insert([
            'name' => 'Video Juegos',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tags')->insert([
            'name' => 'eSports',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);
    }
}
