<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use Carbon\Carbon;

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
            'title' => 'La beta de Dragon Ball FighterZ para Switch ya tiene fecha',
            'slug' => 'la-beta-de-dragon-ball-fighterz-para-switch-ya-tiene-fecha',
            'content' => '<h2>La sesión de prueba está programada del 10 de agosto a las 6:00 al 12 de agosto a las 9:00 (hora peninsular española)</h2><p>Bandai Namco Entertainment Europa ha anunciado todos los detalles de la beta abierta de Dragon Ball FighterZ para Nintendo Switch. La sesión de prueba está programada del 10 de agosto a las 6:00 (hora peninsular española) al 12 de agosto a las 9:00 (hora peninsular española). Para poder participar en la beta abierta, los jugadores tendrán que descargar el cliente, que ya está disponible.</p><p>La beta abierta incluirá cuatro modos de juego diferentes: en el tutorial de combate se podrá entrenar y pulir las habilidades, mientras que en la Arena, el Ring y el Ring por equipos será posible enfrentarse a otros jugadores.</p><h3>23 luchadores para probar Dragon Ball FighterZ en Switch</h3><p>Para experimentar con distintos estilos de juego y crear el equipo ideal, los jugadores tendrán acceso al plantel básico de personajes, que cuenta con 23 luchadores: Goku (SS), Vegeta(SS), Piccolo, Gohan (Adulto), Gohan (Adolescente), Freezer, Ginyu, Trunks, Célula, Androide 18, Gotenks, Krillin, Kid Buu, Majin Buu, Nappa, Androide 16, Yamcha, Hit, Tenshinhan, Goku (SSGSS), Vegeta (SSGSS), Beerus y Goku Black.</p><img src="/storage/img/posts/dragon-ball-fighterz-goku.jpg"/><p>Dragon Ball FighterZ llegará a Nintendo Switch el próximo 28 de septiembre de 2018. Dragon Ball FighterZ ya está disponible en Xbox One, PlayStation 4 y PC (a través de Steam y de otras plataformas de distribución).</p><h3>Vegeta Base y Goku Base se incorporarán muy pronto</h3><p>La lista de personajes de Dragon Ball FighterZ aumenta nuevamente, cuando se incorporen Goku Base y Vegeta Base a principios de agosto para Xbox One, PlayStation 4 y PC.</p><p>Los rivales más famosos adoptan su forma original y con ella vienen sus poderosos movimientos.</p><p>Goku Base puede liberar el formidable poder Kaioken para aplastar a su oponente y, cuando se enfrenta a un temible enemigo, puede usar su habilidad más mortífera: la Superbomba de Energía.</p><span class="fr-video fr-fvc fr-dvb fr-draggable" draggable="true" contenteditable="false"><iframe class="fr-draggable" src="https://www.youtube.com/embed/SpGlFa34xEQ?wmode=opaque" allowfullscreen="" width="640" height="360" frameborder="0"></iframe></span><p>Vegeta Base, el orgulloso príncipe Saiyan tiene acceso a su movimiento característico: el Cañón Galick. Para aniquilar a cualquier oponente, Vegeta usará su ataque más letal, el Galaxy Breaker, un devastador estallido de energía disparado desde todo su cuerpo.</p><span class="fr-video fr-fvc fr-dvb fr-draggable" draggable="true" contenteditable="false"><iframe class="fr-draggable" src="https://www.youtube.com/embed/t1F96Yb53-Y?wmode=opaque" allowfullscreen="" width="640" height="360" frameborder="0"></iframe></span><p>Para más información sobre los juegos de Bandai Namco Entertainment Europa, podemos visitar su sitio web oficial.</p>',
            'image' => 'dragon-ball-fighterz-nintendo-switch.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 1)->tags()->sync([1,2,3,4]); */

        DB::table('posts')->insert([
            'title' => 'Super Bomberman R: un clásico... ¿con interés en los eSports?',
            'slug' => 'super-bomberman-r-un-clasico',
            'content' => '<h2>El clásico de hace tres décadas que regresó hace un año a Nintendo Switch, llega ahora al resto de plataformas de la mano de varios torneos competitivos.</h2><p>Los jugadores más entusiastas de los títulos clásicos están de enhorabuena. Super Bomberman R, el nuevo capítulo de la legendaria saga que vio la luz en Nintendo Switch hace ya más de un año, ha dado el salto al resto de plataformas. Ya está disponible para Play Station 4, Xbox One y PC.</p><p>Un título, para quienes no lo conozcan, con una apuesta clara: ofrecer partidas multijugador sencillas en las que la diversión es lo que prima. Un mecanismo de juego sencillo basado en poner bombas y hacer saltar por los aires a los rivales para conseguir pasar de nivel.</p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" draggable="true" contenteditable="false"><iframe class="fr-draggable" src="https://www.youtube.com/embed/U66jyrdJLSs?wmode=opaque" allowfullscreen="" width="640" height="360" frameborder="0"></iframe></span></p><h3>Novedades de Super Bomberman R con respecto a su versión en Nintendo Switch</h3><p>Si bien su planteamiento no ofrece nada novedoso conforme al clásico que vio la luz hace ya más de tres décadas, Super Bomberman R pretende llegar con su estilo inconfundible al público de consolas de sobremesa y PC, con todo su contenido actualizado con respecto a la versión de Nintendo Switch.</p><p>Como novedades, incluirá personajes exclusivos en función de la plataforma en la que juguemos: en PS4 tendremos disponibles personajes de la saga Ratchet & Clank, en Xbox One de Master Chief y en PC de P-Body. Asimismo, una de sus últimas actualizaciones incorpora tanto personajes como escenarios basados en Metal Gear Solid. </p><p>Por lo demás, un considerable aumento en la resolución del juego y el salto a 60 FPS intentan aprovechar, aunque poco, el aumento de hardware del que dispondrá en sus nuevas plataformas.</p><h3>Super Bomberman R… ¿un esport?</h3><p>Si bien su enfoque como título está totalmente alejado de lo que un esport requiere, su clara apuesta por el juego multijugador ha propiciado la creación de una gran cantidad de eventos y competiciones durante este año de vida en Nintendo Switch. Destacando especialmente torneos locales como el organizado en Madrid por e-Squad Academy.</p><p>El Modo Combate, su apuesta por el competitivo, tiene dos modalidades disponibles: una online que propone batallas entre ocho jugadores, y un modo local en el que establecemos combates entre cuatro jugadores, pudiendo elegirse competir individualmente o por equipos.</p>',
            'image' => 'super-bomberman-r-nintendo-switch.jpg',
            'category_id' => '1',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 2)->tags()->sync([2,3]); */

        DB::table('posts')->insert([
            'title' => 'World of Warcraft se moderniza con Battle for Azeroth',
            'slug' => 'world-ofwarcraft-se-moderniza-con-battle-for-azeroth',
            'content' => '<h2>La esperada expansión del título de Blizzard traerá consigo grandes y esperadas mejoras al universo WoW.</h2><p>Durante más de una década, World of Warcraft (y en general, Blizzard) ha sido una de las sagas que mejor han sabido generar y gestionar el hype en torno a sus títulos y nuevas actualizaciones de contenido. Algo que con “Battle For Azeroth“, la última expansión de WoW, no iba a ser menos.</p><p>A través de una nueva y espectacular cinemática que Activision Blizzard ha decidido bautizar bajo el nombre de El Viejo Soldado, el legendario MMORPG de los creadores de la saga Diablo pretenden seguir manteniendo entretenidos a su contante y leal comunidad de jugadores.</p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" draggable="true" contenteditable="false"><iframe class="fr-draggable" src="https://www.youtube.com/embed/s0verr5vFkk?wmode=opaque" allowfullscreen="" width="640" height="360" frameborder="0"></iframe></span></p><h3>Battle For Azeroth, una de las expansiones más esperadas de WoW</h3><p>World Of Warcraft ha querido hacer de la llegada de la expansión “Battle For Azeroth” todo un acontecimiento. Una renovación que los fans del título llevaban mucho tiempo esperando y que, además del contenido nuevo, incluirá grandes mejoras técnicas.</p><p>Una de ellas, la cual se llevaba años esperando, es la actualización a DirectX 12. Una mejora que el juego venía pidiendo a gritos y que le permite aprovechar de forma mucho más óptima el sistema operativo Windows 10, tanto si se decide jugar desde una ventana como si se elige hacerlo a pantalla completa.</p><p>Pese a que ya han pasado años de la gran fiebre que generó World of Warcraft en todo el mundo, Activision Blizzard trabaja por mantener activa a su comunidad, cifrada en unos cinco millones de jugadores concurrentes.</p><p>A través de las expansiones que llegan al juego y la gran gestión de sus campañas de promoción por medio de cinemáticas de lo más épicas, WoW consigue año tras año mantenerse entre los videojuegos online mejor valorados.</p>',
            'image' => 'battle-for-azeroth-world-of-warcraft.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 3)->tags()->sync([4]); */

        DB::table('posts')->insert([
            'title' => 'Realm Royale prepara su asalto a consolas con una beta cerrada',
            'slug' => 'realm-royale-prepara-su-asalto-a-consolas-con-una-beta-cerrada',
            'content' => '<h2>El battle royale nacido de la mente de los creadores de Paladins llegará a Play Station 4 y Xbox One.</h2><p>Si los battle royale son la actual gallina de los huevos de oro en los videojuegos y Fortnite el rey del género, hay un título que se ha planteado por objetivo usurpar su trono con una apuesta original y diferente. Se trata de Realm Royale, título del que ya os hablamos el mes pasado.</p><p>Un juego de supervivencia que estéticamente se parece mucho a Fortnite, pero que incorpora una temática de fantasía y nuevas mecánicas que lo hacen único, como la aparición de cinco clases diferentes (guerrero, ingeniero, asesino, mago y cazador). En función de cuál elijamos, tendremos un tipo de habilidad diferente.</p><p>Pues bien: el título desarrollado por Hi-Rez Studios, creadores del exitoso Paladins, sigue empeñado en recortar distancias con Fortnite. Y su siguiente paso es dar el salto a videoconsolas, sentando las bases que en su día definió el super éxito de Epic Games.</p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" draggable="true" contenteditable="false"><iframe class="fr-draggable" src="https://www.youtube.com/embed/vh_n-opTMIQ?wmode=opaque" allowfullscreen="" width="640" height="360" frameborder="0"></iframe></span></p><h3>Abierto el plazo de inscripción a la beta cerrada de Realm Royale para consolas</h3><p>Así, Hi-Rez anunció la semana pasada la apertura de inscripciones a una beta cerrada para probar Realm Royale tanto en Play Station 4 como Xbox One. Un lanzamiento sobre el que todavía no se conoce fecha, pero que tal y como anuncian diversos medios podría llegar en los próximos días.</p><p>En escasos dos meses de vida, Realm Royale ha conseguido aunar a más de cuatro millones de jugadores. Unas cifras que no dejan de ir en aumento y que se incrementarán considerablemente con su llegada a Play Station 4 y Xbox One.</p><p>Asimismo, Hi-Rez Studios no ha comunicado hasta ahora su intención de implementar el juego cruzado entre plataformas, uno de los grandes valores de Fortnite Battle Royale.</p><p>Para inscribirte en la beta cerrada de Realm Royale tanto para Play Station 4 como para Xbox One, tan solo tienes que apuntarte en el siguiente enlace.</p>',
            'image' => 'realm-royale.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 4)->tags()->sync([1]); */

        DB::table('posts')->insert([
            'title' => 'Llegan el Misil Teledirigido y el modo Explosivos Voladores a Fortnite',
            'slug' => 'llegan-el-misil-teledirigido-y-el-modo-explosivos-voladores-a-fortnite',
            'content' => '<h2>El parche de actualización V5.10 llega con jugosas novedades.</h2><p>Esta semana ha empezado fuerte para Fortnite Battle Royale. El éxito de Epic Games ha dado la bienvenida a un nuevo parche de actualización: la versión 5.10, la cual no requerirá tiempos de espera y que podréis disfrutar desde hoy mismo si iniciáis el juego en vuestra plataforma favorita.</p><p>Novedades jugosas para los jugadores, entre las que destacan principalmente el regreso del Misil Teledirigido, el modo de juego por tiempo limitado Explosivos Voladores y la inclusión de un nuevo sniper en el modo Salvar el Mundo: el Fusil de Tirador Catalejo.</p><h3>Así es el nuevo Misil Teledirigido de Fortnite</h3><p>La semana pasada ya os avanzábamos el deseo de Fortnite de recuperar el Misil Teledirigido, un arma que ha estado meses en el exilio debido a su desproporcionada efectividad. Así, regresa al modo battle royale con un considerable nerfeo, del que ahora tenemos disponible sus estadísticas.</p><img src="/storage/img/posts/misil-teledirigido-fortnite-battle-royale.jpg"/><p>Así, la duración del misil se ha reducido tres segundos (de los 18 que duraba antes, a los 15 que durará a partir de ahora), mientras que su velocidad de movimiento pasará de 1100 a 1000.</p><p>Sin embargo, el mayor nerfeo lo ha sufrido en sus estadísticas de daño. A partir de ahora, infligirá 74/77 puntos de daño en el enemigo, frente a los 105/110 que producía antes. Por otro lado, castigará las estructuras con 400 de daño.</p><h3>Modo por tiempo limitado Explosivos Voladores</h3><p>Este nuevo tipo de partidas trae consigo el regreso de otro antiguo objeto: el Jetpack. Así, su planteamiento consistirá en surcar los cielos propulsándose y disparando armas explosivas. Entre ellas, por supuesto, se encontrará el nuevo Misil Teledirigido.</p><p>Así, este modo combinará la diversión explosiva del modo por tiempo limitado: Explosivos mejores con los Jetpacks, que se encuentran en la recámara de Epic Games tras hacer su aparición en el juego hace meses, generando diversidad de opiniones entre los jugadores.</p><img src="/storage/img/posts/fortnite-battle-royale.jpg"/>',
            'image' => 'fortnite-2.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'game_id' => '2',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 5)->tags()->sync([4]); */

        DB::table('posts')->insert([
            'title' => 'El gran cambio que habrá en los sobres de FIFA 19',
            'slug' => 'el-gran-cambio-que-habra-en-los-sobres-de-fifa-19',
            'content' => '<h2>EA Sports promete cambios para hacer menos aleatoria la suerte en los sobres de Ultimate Team en FIFA 19</h2><p>La saga FIFA es con toda seguridad una de las más exitosas en el mundo de los videojuegos en lo que se refiere al tamaño de su comunidad de jugadores, sus cifras de ventas e ingresos durante la vida útil de sus juegos. Sin embargo, también es uno de los más criticados en el sector de los eSports al ser considerado un escandaloso pay-to-win.</p><p>Casi toda la culpa de esta fama la tienen los sobres de Ultimate Team, tan necesarios para generar riqueza en nuestro club y poder costear plantillas por valor de millones de monedas y estar en igualdad de condiciones a los mejores jugadores del planeta. O por lo menos, a aquellos que no tienen reparo a sacar la tarjeta de crédito para adquirir de cuando en cuando FIFA Points.</p><h3>FUT 19 mostrará probabilidades en los sobres</h3><p>Sin embargo, EA Sports ha prometido cambios respecto a la apertura de sobres de cara a su próximo FIFA 19. Así lo ha confirmado a la revista Eurogamer Daryl Hold, vicepresidente de la compañía, durante Gamelab Barcelona 2018, al asegurar que la próxima edición del simulador de fútbol mostrará las posibilidades de que toquen determinadas cartas en los sobres antes de abrirlos.</p><img src="/storage/img/posts/fifa-19-champions-3.jpg"/><p>“Cuando tu compras sobres en FIFA, sabes lo que adquieres. Compras un número determinado de items que están garantizados. No obstante, a partir de FIFA 19, los jugadores sabrán con anterioridad las probabilidades de qué pueden obtener”.</p><p>Aún se desconoce la forma exacta en la que EA Sports introducirá esta novedad, aunque se presupone que las probabilidades que notificará será la media numérica de los jugadores. Algo parecido a lo que ocurre en el modo myClub de PES.</p><p>FIFA 19 tiene prevista su salida al mercado el 28 de septiembre de 2018. Lo hará para todas las plataformas (PS4, Xbox One, Nintendo Switch, PC, PS3 y Xbox 360) y según lo anunciado en la feria del E3, tendrá en la inclusión de la licencia Champions League la principal de sus novedades.</p>',
            'image' => 'guardiola-fifa-19.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);
        /* Post::where('id', 6)->tags()->sync([3,4]); */

        DB::table('posts')->insert([
            'title' => 'Los jugadores de eSports cobrarán más que los deportistas profesionales',
            'slug' => 'los-jugadores-de-esports-cobraran-mas-que-los-deportistas-profesionales',
            'content' => '<h2>Los videojuegos generan una audiencia similar, y a veces superior, a las ligas profesionales de los deportes convencionales</h2><p>En menos de una década, el mundo del deporte profesional se ha visto invadido por el auge de eSports. Estos eventos de videojuegos ahora compiten, y en algunos casos superan, a las ligas deportivas tradicionales por la cantidad de espectadores en vivo que reúnen y la cantidad de dinero en publicidad que son capaces de generar.</p><p>Por ejemplo, DotA 2, el popular MOBA publicado por Valve, entregó hace relativamente poco 20 millones de dólares en premios a sus mejores jugadores durante sus últimas finales.</p><h3>¿Qué significa esto para los deportes tradicionales?</h3><p>El éxito duradero de la retransmisiones de partidos de las ligas deportivas tradiciones se explica porque son eventos destinados a disfrutarse en directo. Como tales, han sido resistentes a las cambios en el panorama global de los medios de comunicación y, en cierta medida, salvados por la llegada de los servicios de transmisión bajo demanda como Netflix y Amazon Prime.</p><img src="/storage/img/posts/esports-audiencias-profesionales.jpg"/><p>Sin embargo, a día de hoy, los videojuegos generan una audiencia al menos similar a las ligas profesionales de los deportes convencionales. Es el caso, por ejemplo, del torneo League of Legends de 2016. Este evento atrajo a 36 millones de espectadores frente a las pantallas, cinco millones más que las Finales de la NBA, para contemplar en directo como una ruidosa multitud se congregaba en el famoso estadio Bird Nest de China.</p><p>Y es que los eSports imitan los principios de las ligas deportivas tradicionales: un contenido emocionante, estrellas con miles de seguidores, nombres de equipos pegadizos, repeticiones a cámara lenta, partidos intensos y un resultado incierto.</p><p>Estos videojuegos atraen a las audiencias al no estar diseñados solamente para ser jugados, sino que cada vez son visualmente más atractivos para el público.</p><img src="/storage/img/posts/esports-audiencias-anunciantes.jpg"/><h3>Los eSports atraen anunciantes</h3><p>El panorama económico de los deportes electrónicos es asombroso. Según NewZoo, se estima que los eSports “en su trayectoria actual, alcancen los 1.400 millones de dólares en 2020“. Por si fuera poco, “un escenario más optimista sitúa los ingresos en 2.400 millones de dólares” afirma el medio norteamericano.</p><p>Esta creciente popularidad abre más oportunidades a los jugadores para competir a nivel profesional y firmar grandes contratos, ganar premios en metálico y salarios similares a los de LeBron James, Rafael Nadal, o Cristiano Ronaldo.</p><p>Sea como fuere, ahora resulta que nuestros padres se equivocaban: podemos estar pegados todo el día a la consola en nuestra habitación y, aún así, ganarnos la vida.</p>',
            'image' => 'esports-audiencias.jpg',
            'category_id' => '1',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Se acerca lo nuevo de Riot tras League of Legends',
            'slug' => 'se-acerca-lo-nuevo-de-riot-tras-league-of-legends',
            'content' => '<h2>La compañía prepara su asalto al género de los MMORPG, tal y como desvela una exclusiva de "Variety"</h2><p>Riot Games lo tiene claro: dormirse en los laureles en el sector del desarrollo de videojuegos es uno de los mayores riesgos que puede correr una productora. Con el éxito sin precedentes de Fortnite, su ópera prima League of Legends parece haber perdido algo de cancha en lo que a popularidad se refiere. Y quiere poner remedio al asunto.</p><p>Tal y como revela en exclusiva el medio ‘Variety’, Riot Games andaría inmerso en un nuevo proyecto más allá de League of Legends. Un juego completamente distinto, alejado del juego MOBA, que sin embargo repetirá parte de la fórmula que ha llevado a LoL al éxito más absoluto durante la última década.</p><img src="/storage/img/posts/league-of-legends.jpg"/><h3>Riot quiere adentrarse en los MMORPG</h3><p>League of Legends nació con el objetivo de convertirse en una alternativa a DOTA. El juego de Valve es considerado el padre de los MOBA. Sin embargo, la complejidad de su mecánica era una barrera de entrada muy grande para nuevos jugadores. Una oportunidad que Riot quiso aprovechar creando LoL, un juego muy similar pero más accesible y menos complejo.</p><p>Así, el alumno terminó superando al maestro. Algo que Riot pretende volver a hacer entrando en un nuevo género: los MMORPG. Un nicho que tiene a World of Warcraft como la más absoluta referencia y en el que Riot ve una oportunidad en este momento.</p><p>Así ha reconocido en una entrevista a ‘Variety’ Marc Merrill, co-fundador de Riot Games. Corren tiempos en el mundo de los videojuegos en los que la única forma de no estancarse y morir es innovar y atreverse a probar cosas nuevas. Durante muchos años, hablar de Riot ha sido hacerlo de League of Legends. Ahora al parecer, la compañía está preparada para afrontar el reto de crear algo nuevo de la nada. Y con suerte, volver a revolucionar el mundo de los eSports haciendo incursión en un nuevo género.</p>',
            'image' => 'kaisa-lol.jpg',
            'category_id' => '2',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Pokémon mantiene la esencia de los combates en el juego de cartas',
            'slug' => 'pokemon-mantiene-la-esencia-de-los-combate-en-el-juego-de-cartas',
            'content' => '<h2>La DreamHack Valencia abrió la temporada competitiva de 2019</h2><p>Pokémon no muere, pese a que haya muchos que quieren dar a la saga por muerta. Con permiso de Mario, la compañía japonesa dio con un filón prácticamente infinito hace más de 20 años, y todavía hoy sigue estando en lo más alto de las ventas con cada nuevo juego que sale. Sin embargo, los eSports no han parecido ir de la mano de un juego que, dejando al margen la aventura, es puramente estratégico y competitivo. En la DreamHack Valencia tuve la oportunidad de asomarme a una realidad donde Pokémon explota sus combates sin necesidad de un Cable Link y, aunque suene raro, sin tampoco una videoconsola.</p><img src="/storage/img/posts/pokemon-dreamhack-valencia.jpg"/><p>El juego de Pokémon se adaptó a las cartas con la primera generación, tratando de llegar a un público masivo con Pokémon Trading Card Game, un juego para Game Boy Color que ofrecía el mismo juego de mesa pero viviendo una aventura. El juego de cartas es sencillo: cada jugador tiene un mazo con unos pokémon. Los entrenadores comienzan con pokémon básicos que pueden evolucionar para aumentar la vida de sus criaturas y desbloquear ataques más poderosos. Para realizar los ataques necesitan energías, algo parecido al maná de Magic pero que se añade a un pokémon. Cuando un jugador pierde seis pokémon, la partida termina con el contrincante como vencedor.</p><p>La mecánica es sencilla, lo suficiente como para que familias enteras viajen a Valencia solo para disputar el TCG Valencia Special Event, siendo la primera vez que DreamHack Valencia acogía un evento de este tipo, además de ser el primero que arranca la temporada competitiva. Stéphane Ivanoff fue el ganador, sumando los 200 puntos del circuito competitivo, una cifra que se queda muy cerca de los 300 que permiten el pase a los jugadores Máster a la gran final. Curiosamente, Ivanoff, que comienza con buen pie la temporada 2019, disputará del 24 al 26 de agosto las finales de 2018 en Nashville, Estados Unidos.</p><h3>Pokémon TCG desde los ojos del aficionado</h3><img src="/storage/img/posts/pokemon-dreamhack-valencia-2.jpg"/><p>Para conocer un poco más sobre el mundo de Pokémon y su juego de cartas preguntamos a Jose Miguel Martínez, también conocido como Chemy. A sus 23 años es uno de los fundadores de Granada Hammers, una pequeña comunidad de aficionados al juego que poco a poco va creciendo y reuniendo a más entusiastas. “Somos un grupo de amigos que jugábamos en Granada, nos hicimos amigos a raíz del juego y de ahí surgió la idea de empezar a competir y tomárnoslo en serio”, nos comenta sobre los orígenes del club.</p><p>Jose, como la gran mayoría, comenzó con los videojuegos, dando el salto a las cartas al descubrir que existían. “Comencé jugando online, que es muy intuitivo y sencillo. Al poco, vi que había una tienda que vendía sobres y compré los primeros. Poco a poco fui integrándome en la comunidad de la ciudad, cambiando cartas… y como era una comunidad pequeña comenzamos a jugar entre nosotros, tratando de crear más afición. Empezamos seis personas hace dos y ahora ya somos unos 14 en el equipo”, cuenta con orgullo.</p><p>En los eSports estamos acostumbrados a tener un meta asentado que delimita los personajes o las combinaciones más fuertes, y en el caso de Pokémon en las cartas es igual, aunque más centrado en el tipo de estrategia en partida. “Principalmente juegas con uno o dos pokémon para atacar, mientras que el resto los usas desde la banca para usar habilidades como robar cartas, cambiar al contrincante al pokémon activo o que tus pokémon no tengan coste de energía”.</p><p>Al ser estrategias tan cerradas, es muy común encontrar en varias mesas las mismas barajas, pero también hay excepciones. “La carta que más se usa es la Tapu Lele GX, que cuesta en torno a 30 euros”. De la misma forma que hay cartas comunes en muchos mazos, hay otras que la propia organización ha tomado la decisión de prohibir, aunque suelen ser casos excepcionales. “Es complicado que baneen una carta. Hay años que sí se han retirado por romper el meta”.</p><h3>Competición por y para los jugadores</h3><img src="/storage/img/posts/pokemon-dreamhack-valencia-4.jpg"/><p>Además, como ocurre con Hearthstone o Magic, para los torneos se cierra un número determinado de cartas que se pueden jugar en función de las últimas expansiones que han salido.</p><p>Sin embargo, aunque haya afición, como bien pudimos comprobar en DreamHack Valencia, los torneos de cartas Pokémon están muy alejados de uno de Hearthstone. La falta de una retransmisión hace que el evento nazca y muera en el acto, sin oportunidad de mostrar al resto lo que se está haciendo allí y quedando reservado solo para los aficionados más fieles que participan. Ahora bien, esto hace que cada evento sea más especial, motivo más que suficiente para que decenas de personas viajen miles de kilómetros “solo” para jugar a las cartas.</p><p>Pokémon Trading Carg Game, acortado como Pokémon TCG, cuenta con un juego free-to-play que permite a cualquier jugador echar un par de partidas y aprender cómo se juega. Además, aquí puedes comprar las barajas físicas e introducirlas en el juego, así podrás librar tus combates pokémon tanto en persona como detrás de una pantalla.</p><p>Aunque lo de Valencia haya sido algo especial, se juegan torneo de Pokémon casi cualquier día en prácticamente todo el mundo. Estados Unidos cuenta con el mayor número de eventos, pero en nuestro país también se compite. A través de la página web se pueden localizar los próximos eventos.</p>',
            'image' => 'pokemon-dreamhack-valencia-3.jpg',
            'category_id' => '3',
            'user_id' => '1',
            'active' => 1,
            'published_at' => Carbon::now(),
            'created_at' =>	Carbon::now(),
			'updated_at' =>	Carbon::now()
        ]);


        $posts = Post::all();
        foreach($posts as $key => $post) {
            $post->tags()->sync([rand(1, 4)]);
        }

        
    }
}
