<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        DB::table('categories')->insert([
            [
                'name' => 'Amargadhi',
            ],           
            [
                'name' => 'Arujundhara'
            ],
            [
                'name' => 'Aurahi'
            ],
        ]);  
    }
}
