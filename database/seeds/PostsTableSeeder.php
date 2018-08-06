<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Post::class, 50)->create();

        DB::table('posts')->insert([
            'title' => 'Super Bomberman R: un clásico... ¿con interés en los eSports?',
            'content' => '<h2>El clásico de hace tres décadas que regresó hace un año a Nintendo Switch, llega ahora al resto de plataformas de la mano de varios torneos competitivos.<h2><p>Los jugadores más entusiastas de los títulos clásicos están de enhorabuena. Super Bomberman R, el nuevo capítulo de la legendaria saga que vio la luz en Nintendo Switch hace ya más de un año, ha dado el salto al resto de plataformas. Ya está disponible para Play Station 4, Xbox One y PC.</p><p>Un título, para quienes no lo conozcan, con una apuesta clara: ofrecer partidas multijugador sencillas en las que la diversión es lo que prima. Un mecanismo de juego sencillo basado en poner bombas y hacer saltar por los aires a los rivales para conseguir pasar de nivel.</p><h3>Novedades de Super Bomberman R con respecto a su versión en Nintendo Switch</h3><p>Si bien su planteamiento no ofrece nada novedoso conforme al clásico que vio la luz hace ya más de tres décadas, Super Bomberman R pretende llegar con su estilo inconfundible al público de consolas de sobremesa y PC, con todo su contenido actualizado con respecto a la versión de Nintendo Switch.</p><p>Como novedades, incluirá personajes exclusivos en función de la plataforma en la que juguemos: en PS4 tendremos disponibles personajes de la saga Ratchet & Clank, en Xbox One de Master Chief y en PC de P-Body. Asimismo, una de sus últimas actualizaciones incorpora tanto personajes como escenarios basados en Metal Gear Solid. </p><p>Por lo demás, un considerable aumento en la resolución del juego y el salto a 60 FPS intentan aprovechar, aunque poco, el aumento de hardware del que dispondrá en sus nuevas plataformas.</p><h3>Super Bomberman R… ¿un esport?</h3><p>Si bien su enfoque como título está totalmente alejado de lo que un esport requiere, su clara apuesta por el juego multijugador ha propiciado la creación de una gran cantidad de eventos y competiciones durante este año de vida en Nintendo Switch. Destacando especialmente torneos locales como el organizado en Madrid por e-Squad Academy.</p><p>El Modo Combate, su apuesta por el competitivo, tiene dos modalidades disponibles: una online que propone batallas entre ocho jugadores, y un modo local en el que establecemos combates entre cuatro jugadores, pudiendo elegirse competir individualmente o por equipos.</p>',
            'image' => 'Super-Bomberman-R-Nintendo-Switch.jpg',
            'category_id' => '',
            'user_id' => '',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Video Juegos',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'eSports',
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);
    }
}
