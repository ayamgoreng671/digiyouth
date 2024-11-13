<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('team_users')->insert([
            [
                'id' => 1,
                'team_id' => 1,
                'user_id' => 4,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'id' => 2,
                'team_id' => 1,
                'user_id' => 6,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'id' => 3,
                'team_id' => 1,
                'user_id' => 5,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'id' => 4,
                'team_id' => 2,
                'user_id' => 8,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
            [
                'id' => 5,
                'team_id' => 2,
                'user_id' => 7,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
            [
                'id' => 6,
                'team_id' => 2,
                'user_id' => 9,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
        ]);
    }
}