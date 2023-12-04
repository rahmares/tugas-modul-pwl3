<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Sherlock Holmes',
            'autor' => 'Arthur Conan Doyle',
            'year' => '1887',
            'publisher' => 'Simon & Schuster',
            'city' => 'North Gower Street',
            'cover' => 'cover.jpg',
            'bookshelfes_id' => 1,
            'category_id' => 1,
        ]);
        //
    }
}
