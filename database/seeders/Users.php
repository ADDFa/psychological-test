<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name"  => "Admin",
                "gender"               => "L",
                "birthplace"            => "Sarolangun",
                "date_of_birth"         => "2001-03-18",
                "general_education"     => "S1"
            ],
            [
                "name"  => "Adha",
                "gender"               => "L",
                "birthplace"            => "Sarolangun",
                "date_of_birth"         => "2001-03-18",
                "general_education"     => "S1"
            ]
        ]);

        DB::table("credentials")->insert([
            [
                "user_id"   => 1,
                "username"  => "admin",
                "password"  => password_hash("password", PASSWORD_DEFAULT),
                "role"      => "admin"
            ],
            [
                "user_id"   => 2,
                "username"  => "adha",
                "password"  => password_hash("password", PASSWORD_DEFAULT),
                "role"      => "user"
            ]
        ]);
    }
}
