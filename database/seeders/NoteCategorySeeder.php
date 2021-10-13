<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoteCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NoteCategory::create([
            'name' => 'public'
        ]);
        \App\Models\NoteCategory::create([
            'name' => 'private'
        ]);
    }
}
