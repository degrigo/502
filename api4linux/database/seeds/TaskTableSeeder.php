<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = \App\User::all();
        foreach ($users as $user) {
        	for ($i = 0; $i < 5; $i++) { 
        	DB::table('tarefas')->insert([
        		'usuario_id' => $user->id,
        		'status' => $faker->word,
        		'descricao' => $faker->text
        		]);
        	}
        }
        
    }
}
