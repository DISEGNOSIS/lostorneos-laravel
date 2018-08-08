<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Rocket League',
            'slug' => 'rocket-league',
            'image' =>'rocket-league.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Minecraft',
            'slug' => 'minecraft',
            'image' =>'minecraft.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'CS GO',
            'slug' => 'cs-go',
            'image' =>'counter-strike-go.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Battlefield V',
            'slug' => 'battlefield-v',
            'image' =>'battlefield.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Fortnite',
            'slug' => 'fortnite',
            'image' =>'fortnite.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Call of Duty Black Ops III',
            'slug' => 'call-of-duty-black-ops-iii',
            'image' =>'call-of-duty-black-ops-3.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'League of Legends',
            'slug' => 'league-of-legends',
            'image' =>'league-of-legends.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        

        
        
    }
}
