<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->delete();
        DB::table('users')->truncate();

        $faker =Faker::create();
        //        $faker =Faker::create(hy_AM);
        $users =[];

        foreach (range(1,10) as $index)
        {
            $users[] = [
                'user_first_name' => $faker->name,
                'user_last_name' => $faker -> name,
                'user_email' => $faker->email,
                'user_password' => bcrypt('secret'),
            ];
        }
        DB::table('users')->insert($users);
    }
}
