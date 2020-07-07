<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i<=10 ;  $i++)
        {
            DB::table('users')->insert([
                "name"=>"testさん" .$i,
                "email"=>"test@test.jp".$i,
                "password"=>"kaai1733".$i,
                "created_at"=>new DateTime(),
                "updated_at"=>new DateTime()
                ]);
        }
    }
}
