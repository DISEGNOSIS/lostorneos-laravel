<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'eSports',
            'slug' => 'esports',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Videojuegos',
            'slug' => 'videojuegos',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Entretenimiento',
            'slug' => 'entretenimiento',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Hardware',
            'slug' => 'hardware',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Accesorios',
            'slug' => 'accesorios',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);
    }
}
