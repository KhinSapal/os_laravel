<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1=new User;
        $s1->name="Aung";
        $s1->email="aung@gmail.com";
        $s1->password=Hash::make('12345678');
        $s1->save();
    }
}
