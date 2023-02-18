<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //malas nk register
        DB::table('users')->insert([
            'name' => "Ralph",
            'email' => 'hell@lo',
            'password' => Hash::make('qweasdrf'),
        ]);
    }
}
