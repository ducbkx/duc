<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
    }

}
class userSeeder extends Seeder
{
    public function run()
    {
            DB::table('users')->insert
            ([
                    ['name'=>str_random(3),'email'=>str_random(3).'@gmail.com','password'=>bcrypt('2021993')],
                    ['name'=>str_random(3),'email'=>str_random(3).'@gmail.com','password'=>bcrypt('2021993')],
                    ['name'=>str_random(3),'email'=>str_random(3).'@gmail.com','password'=>bcrypt('2021993')]

            ]);
    }        
}