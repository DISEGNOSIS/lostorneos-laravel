<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Guada',
			'username' => 'admin',
	        'email' => 'guadalupe@disegnosis.com.ar',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',  // secret
            'country_id' => 10,
            'avatar' => 'gua.jpeg',
            'score' => 133,
            'remember_token' => str_random(10),
            'created_at'	=>	Carbon::now(),
			'updated_at'	=>	Carbon::now()
        ]);

        factory(User::class, 49)->create();

        $users = User::all();
        foreach($users as $user) {
            if($user->id == 1) {
                $user->attachRole(1);
            } else {
                $user->attachRole(6);
            }
        }

    }
}
