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
            ["name"  => "Admin"],
            ["name"  => "Adha"]
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

        DB::table("test_participants")->insert([
            "user_id"               => 2,
            "gender"               => "L",
            "birthplace"            => "Sarolangun",
            "date_of_birth"         => "2001-03-18",
            "general_education"     => "S1"
        ]);
    }
}
