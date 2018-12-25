<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 3)->create()->each(function($u){
            $u->question()->
            saveMany(
                factory(Question::class, rand(1,5))->make()
            );
        });
        
    }
}
