<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default user
        User::factory()->create([
            'name'=>'Isildur',
            'email'=>'isildur@gmail.com',
            'password'=>'$2y$12$DMv.dxRvuRuqFBLIm.aL1OT.zltIi796u5AToKHLPT2I7ezZKLB5K',
        ]);

        // Other goes here
        $this->call([BookCategorySeeder::class]);
    }
}
