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
            'name' => 'CS GO',
            'image' =>'/img/games/counter-strike-go.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Fortnite',
            'image' =>'/img/games/fortnite.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Call of Duty Black Ops III',
            'image' =>'/img/games/call-of-duty-black-ops-3.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'League of Legends',
            'image' =>'/img/games/league-of-legends.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('games')->insert([
            'name' => 'Rocket League',
            'image' =>'/img/games/rocket-league.png',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);
    }
}
