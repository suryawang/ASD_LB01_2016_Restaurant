<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(MenuTableSeeder::class);

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'username' => 'chef',
            'password' => bcrypt('chef'),
            'role' => 'chef'
        ]);
        DB::table('users')->insert([
            'username' => 'boss',
            'password' => bcrypt('boss'),
            'role' => 'head'
        ]);
        DB::table('users')->insert([
            'username' => 'cashier',
            'password' => bcrypt('cashier'),
            'role' => 'cashier'
        ]);
    }

}

class MenuTableSeeder extends Seeder {

    public function run() {
        DB::table('foods')->delete();
        DB::table('foods')->insert([
            'type' => 'drink',
            'name' => 'Caffe Latte',
            'price' => 40000,
            'discount' => 25,
            'duration' => 10,
            'picture' => 'caffe-latte.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Choco Doughnut',
            'price' => 10000,
            'discount' => 0,
            'duration' => 30,
            'picture' => 'choco-doughnut.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Burger',
            'price' => 35000,
            'discount' => 5,
            'duration' => 20,
            'picture' => 'burger.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Spaghetti Carbonara',
            'price' => 22000,
            'discount' => 10,
            'duration' => 25,
            'picture' => 'carbonara.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Spaghetti Marinara',
            'price' => 27000,
            'discount' => 15,
            'duration' => 25,
            'picture' => 'marinara.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Ginger Soup',
            'price' => 21000,
            'discount' => 1,
            'duration' => 14,
            'picture' => 'ginger-soup.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'drink',
            'name' => 'Milk Shake',
            'price' => 18500,
            'discount' => 25,
            'duration' => 0,
            'picture' => 'milkshake.jpg'
        ]);
        DB::table('foods')->insert([
            'type' => 'food',
            'name' => 'Chicken Gordon Bleu',
            'price' => 36500,
            'discount' => 0,
            'duration' => 30,
            'picture' => 'chicken-gordon-bleu.jpg'
        ]);
//        DB::table('foods')->insert([
//            'type' => 'food',
//            'name' => 'Beef Steak',
//            'price' => 55000,
//            'discount' => 0,
//            'duration' => 40,
//            'picture' => 'beef-steak.jpg'
//        ]);
    }

}
