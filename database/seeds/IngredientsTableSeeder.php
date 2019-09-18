<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'chicken',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'buffalo wing sauce',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'salad',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'butter',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'rolls',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'ginger',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'garlic',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'honey',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'spring onions',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'soy sauce',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'seasame seeds',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'spring greens',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'tomato',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'broccoli',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'pizza dough',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'passata',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'olive',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'basil',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'pesto',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'mozzarella',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'asparagus',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'double cream',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'parmesan',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'tagliatelle',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'apple',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'water',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'sugar',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'cinnamon',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'nutmeg',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'porridge',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'golden syrup',
        ]);

    }
}
