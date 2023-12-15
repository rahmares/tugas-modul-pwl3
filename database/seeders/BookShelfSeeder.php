<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookShelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookshelf::insert([
            [
                'id' => '1',
                'code' => '620', 'name' => 'Engineering',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' => '621',
                'name' => 'Mechanical',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'code' => '622',
                'name' => 'Topoographical',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
