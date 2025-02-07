<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory()->count(5)->create();
        $books = Book::factory()->count(20)->create();
        foreach ($books as $book) {
            $randomCategories=$categories->random(rand(1,4))->pluck('id');
            $book->categories()->attach($randomCategories);
        }
    }
}
