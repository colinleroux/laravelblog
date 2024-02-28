<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UncategorizedCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Check if the 'Uncategorized' category already exists to avoid duplicates
        $category = Category::firstOrCreate([
            'name' => 'Uncategorized',
            // Add other fields if your category model has more attributes
        ]);

        // Optionally output a message to the console
        $this->command->info('Uncategorized category created with id ' . $category->id);
    }
}
