<?php

use Illuminate\Database\Seeder;
use App\User;
class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::find(1);
        for($i=1 ; $i<=5 ; $i++)
        {
            DB::table('contents')->insert([
                'title'=>'初めての海外旅行',
                'user_id' => $user->id,
                'content'=>'本当に楽しかった。',
                'continent'=>'アジア',
                'country'=>'中国・韓国・台湾',
                'span'=>'15',
                'costs'=>'200000',
                'picture'=>'写真がいっぱい'.$i,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime()
                ]);
        }
    }
}
