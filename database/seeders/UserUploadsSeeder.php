<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserUploads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserUploadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserUploads::factory(10)->create();
    }
}
