<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(10)->create();
        $categories = Category::factory()->count(5)->create();
        $books = Book::factory()->count(20)->create();
        foreach ($books as $book) {
            $randomCategories=$categories->random(rand(1,3))->pluck('id');
            $book->categories()->attach($randomCategories);
        }

        foreach ($books as $book) {
            foreach ($users->random(4) as $user) {
                Rating::factory()->create([
                    'book_id' => $book->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
