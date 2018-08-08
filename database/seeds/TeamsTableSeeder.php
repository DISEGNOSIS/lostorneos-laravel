<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Team;
use App\Role;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'display_name' => 'Furious Gaming',
            'name' => 'furious-gaming',
            'description' => "<p>Clasificar a certámenes en Colombia, México y Brasil con League of Legends, a Estados Unidos y Brasil con Hearthstone, a Brasil, Chile y Francia con Starcraft II, a Brasil con Player Unknown's, a Estados Unidos con FIFA y Heroes of the Storm, y a Colombia con Paladins.</p><p>Actualmente cuenta equipos de: League of Legends, Counter Strike, Player Unknown's, Starcraft II y Hearthstone. Pronto ampliarán a Call of Duty y Fortnite.</p><p>Objetivo de la multigaming: 'Buscamos ser uno de los referentes a nivel regional; no solo a nivel competencia y resultados, sino como empresa modelo para las nuevas personas y/o empresas que se van metiendo. También buscamos que los deportes electrónicos empiecen a ser aceptados culturalmente en el país'.</p>",
            'image' => 'furious-gaming.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2012-06-18',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('teams')->insert([
            'display_name' => 'Hafnet eSports',
            'name' => 'hafnet-esports',
            'description' => '<h3>LOL: Campeones de la Copa Río de la Plata 2015 y del Circuito de Leyendas 2015.</h3><p>CSGO: Campeones de la Copa TyC Sports 2017.</p>',
            'image' => 'hafnet-esports.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2015-09-18',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('teams')->insert([
            'display_name' => 'Isurus Gaming',
            'name' => 'isurus-gaming',
            'description' => '<h3>LOL: Dos Copas Latinoamérica Sur.</h3><h3>CSGO: Dos Ligas Pro de CSGO, un Major de Temporada de Juegos, una liga TyC Sports, y las clasificaciones a la World Electronic Sports Games (China y a la World Cyber Arena (China).</h3><h3>Smite: Dos Copas Latinoamerica y una Copa Latinoamerica Sur.</h3>h3>Overwatch: Segundo puesto en la Contenders 2018.</h3><h3>Call of Duty: Dos LATAM Pro League.</h3><h3>Heartstone: Campeón Copa América Primavera 2016 y WESG Americas.</h3><h3>Starcraft 2: Campeón en WCG Argentina 2013.</h3><h3>Dota 2: Segundo lugar en la Brasil Game Cup.</h3><p>Actualmente cuenta equipos de: League of Legends, Counter Strike, Counter Strike Femenino, Overwatch, Fortnite y un jugador de fighting games.</p><p>Objetivo de la multigaming según el CEO: "Ser la mejor organización del mundo".</p>',
            'image' => 'isurus-gaming.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2011-04-15',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('teams')->insert([
            'display_name' => 'Atrapa2 Gaming',
            'name' => 'atrapa2-gaming',
            'description' => '<h3>CSGO: ​Campeón del Furious Challenge.</h3><h3>Rocket League: Tres veces campeón de la Flako Army.</h3><h3>Heroes of the Storm: Bicampeón de La Taberna.</h3><p>Equipos actuales: ​CSGO Masculino y Femenino, Fortnite, PUBG, Rocket League, Call of Duty, FIFA Clubes Pro y Hearthstone.</p><p>Objetivo: "Ser uno de los equipos destacados de la Argentina".</p>',
            'image' => 'atrapa2-gaming.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2017-07-26',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('teams')->insert([
            'display_name' => 'Nocturns Gaming',
            'name' => 'nocturns-gaming',
            'description' => '<h3>Paladins: Campeones del Paladins SouthAmerica, de la Copa Paladins Latinoamérica y del certamen del Argentina Game Show. Tercer puesto en el HRX Paladins (Mundial), y participación en el Paladins Masters.</h3><h3>Smite: Campeón de la Copa Smite Latinoamérica y subcampeón del Argentina Game Show. Participación en el HRX Smite (Mundial), y del Spring y Summer Finals.</h3><h3>Overwatch: Campeón de la Tecnofields y en la Argentina Game Show. Participación de la Contenders 2017.</h3><h3>CSGO: Subcampeón en Tecnofields.</h3><p>Actualmente cuenta con equipos de: Fortnite, Leage of Legends, Rainbow6 y Smite.</p><p>Objetivos: "Apuntamos a ser referentes en Latinoamérica, a trabajar con prolijidad y hacer las cosas como corresponden. Dejamos horas de laburo para lograr llegar hasta donde estamos. Obviamente que mucho se lo debemos a los jugadores que tenemos y tuvimos dentro de la organización"</p>',
            'image' => 'nocturns-gaming.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2014-12-13',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);        

        DB::table('teams')->insert([
            'display_name' => 'Quad Gaming',
            'name' => 'quad-gaming',
            'description' => '<h3>Smite: Campeón Argentina Game Show 2017.</h3><h3>CSGO: Campeón Copa Argentina 2017. Subcampeón Mundo G Tecnópolis 2016.</h3><h3>Call of Duty: Campeón IGS Autumn League.</h3><h3>Heartstone: Campeón Lions League N°7. Entre el quinto y octavo puestod el WESG Main Event (Hanghzou, China).</h3><h3>Paladins: Subcampeón Argentina Game Show 2017.</h3><p>Objetivo: "Aspiramos a seguir consolidando grupos a lo largo de la escena de los Esports como tops de la región, a construir un intercambio sano entre público-equipo y continuar el crecimiento como exponentes de la Argentina. Queremos explorar nuevas disciplinas e innovar a nivel contenido".</p>',
            'image' => 'quad-gaming.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2016-10-12',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('teams')->insert([
            'display_name' => 'Coscu Army',
            'name' => 'coscu-army',
            'description' => '<h3>CSGO: Campeones de la Liga Principal de abril.</h3<h3>LOL: Campeones de la AORUS League Cono Sur Tournament 1 y 2, y del Circuito Nacional Argentina. Quedaron a un paso de subir a la Copa Latinoamérica Sur.</h3><h2>Fortnite: Campeones de la primera edición de la Fortnite Master Series de Argentina.</h2><p>Actualmente cuentan con: LOL, CSGO y Fortnite.</p><p>Objetivo:  "Seguir cosechando grandes logros como lo venimos haciendo en este pequeño lapso y llegar a ser la mejor multigaming del país, objetivo que sin dudas creemos que podemos lograr. Creemos que, mas que una organización somos una familia".</p>',
            'image' => 'coscu-army.png',
            'score' => rand(1500, 13000),
            'country_id' => 10,
            'foundation' => '2018-03-08',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        $teams = Team::all()->count();
        $users = User::all();
        foreach($users as $key => $user) {
            if($key % 13 == 0) {
                $role = Role::where('name', 'owner')->first();
            } else {
                $role = Role::where('name', 'user')->first();
            }
            $team = Team::findOrFail(rand(1, $teams));
            $user->attachRole($role, $team);
        }

    }
}
