<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Tournament;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournaments')->insert([
            'name' => 'ELeague Premier 2018',
            'slug' => 'eleague-premier-2018',
            'information' => '<p>ELEAGUE, the premium esports content and live tournament brand from Turner and IMG, will feature a stacked field of the world’s best Counter-Strike: Global Offensive teams in action for its fifth non-major CS:GO competition.</p>',
            'image' => 'eleague-premier-2018.png',
            'price' => 0,
            'prize' => 500000,
            'game_id' => 3,
            'country_id' => 52,
            'user_id' => rand(1, 50),
            'featured' => 1,
            'start' => '2018-08-21 12:30:00',
            'end' => '2018-08-29 12:30:00',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tournaments')->insert([
            'name' => 'ESL Masters España - Season 3',
            'slug' => 'esl-masters-espana',
            'information' => '<p>ESL Spain, who recently teamed up with Movistar—a branch of Telefonica—, one of the biggest telecommunications companies in the world, announced its new CS:GO League at the company’s flagship store in Madrid. The league will have a 22,100€ prize pool as well as money set aside to help the teams during the LAN finals.</p>',
            'image' => 'esl-masters-espana.png',
            'price' => 0,
            'prize' => 22100,
            'game_id' => 3,
            'country_id' => 36,
            'user_id' => rand(1, 50),
            'featured' => 0,
            'start' => '2018-09-02 16:00:00',
            'end' => '2018-08-05 16:30:00',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tournaments')->insert([
            'name' => 'ESL One Belo Horizonte 2018',
            'slug' => 'esl-one-belo-horizonte-2018',
            'information' => '<p>8 of the world’s best Counter-Strike: Global Offensive teams will be traveling to ESL One Belo Horizonte in June. But only the best will make it to the big stage in Mineirinho Arena and play in front of the even bigger crowd.</p>',
            'image' => 'esl-one-belo-horizonte-2018.png',
            'price' => 0,
            'prize' => 200000,
            'game_id' => 3,
            'country_id' => 25,
            'user_id' => rand(1, 50),
            'featured' => 1,
            'start' => '2018-10-13 21:30:00',
            'end' => '2018-10-29 21:30:00',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('tournaments')->insert([
            'name' => 'RLCS Season 5 Finals',
            'slug' => 'rocket-league-championship',
            'information' => '<p>The Rocket League Championship Series is the fifth season of the professional Rocket League league. The top teams from North America, Europe, and Oceania will compete at this LAN event to determine the World Champion.</p>',
            'image' => 'rocket-league-championship.png',
            'price' => 0,
            'prize' => 100000,
            'game_id' => 1,
            'country_id' => 74,
            'user_id' => rand(1, 50),
            'featured' => 1,
            'start' => '2018-09-06 22:00:00',
            'end' => '2018-09-11 20:30:00',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);


        $tournaments = Tournament::all();
        foreach($tournaments as $tournament) {
            for($i = 1; $i < 7; $i++) {
                $tournament->teams()->attach([rand(1, 7)]);
            }
            $tournament->tags()->sync([rand(1, 4)]);
        }



    }
}
