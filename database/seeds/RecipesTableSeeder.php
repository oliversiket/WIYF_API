<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => 'Slow Cooker Buffalo Chicken Sandwich',
            'description' => 'This is a spicy, hearty sandwich that will please those who love buffalo chicken wings. This recipe is perfect for those days spent watching football. I like to top these with blue cheese or ranch dressing.',
            'category' => 'Sandwiches',
            'prep_time' => '7 hours',
            'method' => 'Step 1: Place the chicken breasts into a slow cooker, and pour in 3/4 of the wing sauce and the ranch dressing mix. Cover, and cook on Low for 6 to 7 hours. # Step 2: Once the chicken has cooked, add the butter, and shred the meat finely with two forks. Pile the meat onto the hoagie rolls, and splash with the remaining buffalo wing sauce to serve.',
            'num_servings' => '6',
            'img_url' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F5740879.jpg&w=596&h=399.32000000000005&c=sc&poi=face&q=85',
            'img_alt' => 'Slow_Cooker_Buffalo_Chicken_Sandwich'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Easy Teriyaki Chicken',
            'description' => 'Sticky Asian style teriyaki chicken served with sticky rice and steamed greens.',
            'category' => 'Main Course',
            'prep_time' => '20 mins',
            'method' => 'Step 1 : Heat the oil in a non-stick pan over a medium heat. Add the chicken and fry for 7 mins, or until golden. Add the garlic and ginger and fry for 2 mins. Stir in the honey, soy sauce, vinegar and 100ml water. Bring to the boil and cook for 2 - 5 mins over a medium heat until the chicken is sticky and coated in a thick sauce. # Step 2 : Scatter over the spring onions and sesame seeds, then serve the chicken with the rice and steamed veg.',
            'num_servings' => '4',
            'img_url' => 'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2019/06/easy-teriyaki.jpg?itok=DNyZ1JcT',
            'img_alt' => 'Easy_Teriyaki_Chicken'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Rainbow Pizza',
            'description' => 'Forget takeaway pizzas, encourage kids to eat a rainbow every day with this colourful recipe full of fresh flavours – guaranteed to please even fussy eaters',
            'category' => 'Pizzas',
            'prep_time' => '40 mins',
            'method' => 'Step 1 : Heat the oven to 180C/160C fan/gas 4. Put each pizza base on a baking sheet and spread each with half of the passata. Arrange the tomatoes on the top in rings or wedges of colour and add the broccoli and the olives, if using. Squish the mozzarella cherries (bocconcini) a little before dotting them over the pizzas, then drizzle 1 tbsp pesto over each. # Step 2 : Bake for 15-20 mins or until the top is bubbling and just starting to brown a little. Scatter over the basil leaves before serving.',
            'num_servings' => '4',
            'img_url' => 'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2017/07/rainbow-pizzas.jpg?itok=5ibzikc3',
            'img_alt' => 'Rainbow_Pizza'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Asparagus Cream Pasta ',
            'description' => 'A creamy, yet healthy veggie loaded protein-packed pasta with asparagus and peas, all tossed in a lightened-up cream sauce!',
            'category' => 'Pastas',
            'prep_time' => '40 mins',
            'method' => 'Step 1 : To prepare the asparagus, cut off and discard the woody ends, then neatly cut the tips away from the stalks. Keep the tips and stalks separate. In a small saucepan bring the cream and garlic to the boil. Take off the heat, remove the garlic, then set the pan aside. # Step 2 : Cook the stalks in boiling salted water for about 4-5 mins until tender, drain, then tip into the cream with the grated parmesan. Blitz with a hand blender until smooth. # Step 3 :Cook the pasta according to pack instructions, then throw in the tips 2 mins before the end of cooking time. Gently reheat the cream, drain pasta, then tip into a bowl with the cream. Toss, divide into pasta bowls, top with parmesan shavings and serve.',
            'num_servings' => '2',
            'img_url' => 'https://diethood.com/wp-content/uploads/2017/06/Creamy-Vegetable-Pasta-Diethood1.jpg',
            'img_alt' => 'Asparagus_Cream_Pasta'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Apple Pie Jam',
            'description' => 'Apple Pie Jam is a favorite for fall and winter. The jam is not too sweet but has lots of great taste! One of the benefits of having an abundance of a particular veggie or fruit is that you feel a bit more comfortable experimenting with recipes.',
            'category' => 'Compote',
            'prep_time' => '30 mins',
            'method' => 'Step 1 : In a Dutch oven, combine apples and water. Cover and cook slowly until tender. Measure 4-1/2 cups apples; return to the pan. (Save remaining apple mixture for another use or discard.) # Step 2 : Stir in sugar and butter. Bring to a full rolling boil over high heat, stirring constantly. Stir in pectin. Continue to	boil 1 minute, stirring constantly. # Step 3 : Remove from heat; skim off foam. Stir in spices. Carefully ladle hot mixture into seven hot half-pint jars, leaving 1/4-in. headspace. Remove air bubbles and adjust headspace, if necessary, by adding hot mixture. Wipe rims. Center lids on jars; screw on bands until fingertip tight. # Step 4 : Place jars into canner with simmering water, ensuring that they are completely covered with water. Bring to a boil; process 10 minutes. Remove jars and cool.',
            'num_servings' => '4',
            'img_url' => 'https://www.tasteofhome.com/wp-content/uploads/2018/03/Apple-Pie-Jam_exps5296_HFG2413890D07_12_1b_RMS-4-696x696.jpg',
            'img_alt' => 'A_jar_of_golden_Apple_jam_with_a_spoonful_on_a_piece_of_bread'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Golden Syrup Flapjacks',
            'description' => 'Quick and easy, golden and crunchy flapjacks.',
            'category' => 'Dessert',
            'prep_time' => '30',
            'method' => 'Step 1 : Heat oven to 200C/180C fan/gas 6. # Step 2 : Put 250g jumbo porridge oats, 125g butter, 125g light brown sugar and 2-3 tbsp golden syrup in a food processor and pulse until mixed, but be careful not to overmix otherwise the oats may lose their texture. # Step 3 : Lightly grease a 20x20cm baking tin with butter and spoon in the mixture. Press into the corners with the back of a spoon so the mixture is flat and score into 12 squares. # Step 4 : Bake for around 15 minutes until golden brown.',
            'num_servings' => '12',
            'img_url' => 'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2017/12/flapjacks.jpg?itok=Wzyap0-b',
            'img_alt' => 'golden_syrup_flapjacks'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Anything-goes frittata',
            'description' => 'Super flexible leftover frittata',
            'category' => 'Breakfast',
            'prep_time' => '30 mins',
            'method' => 'Step 1 : Heat the oil in a medium non-stick frying pan (ideally ovenproof) and gently fry the sweet potato, new potatoes, broccoli, pepper and leek for 5–7 minutes, or until the potatoes are lightly browned and the other vegetables are just tender, stirring regularly. Stir in the peas, chilli and feta. # Step 2 : Break the eggs into a bowl and add a good pinch of salt and lots of black pepper. Beat well using a large metal whisk. Pour the eggs into the pan and give it a little shake, so they run down between all the vegetables. # Step 3 : Cook the frittata over a gentle heat for 5 minutes without stirring, or until the egg is almost set. Meanwhile, preheat the grill to high. Place the frittata under the hot grill for 3–4 minutes, or until set. # Step 4 : Loosen the sides of the frittata and slide onto a board. Cut into wedges and serve with a green leafy salad.',
            'num_servings' => '2',
            'img_url' => 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fassets.epicurious.com%2Fphotos%2F5719486194956b31172ec2d0%2Fmaster%2Fpass%2F241324_hires.jpg&f=1&nofb=1',
            'img_alt' => 'leftover_frittata'
        ]);
        DB::table('recipes')->insert([
            'name' => 'Avocado pasta with peas and mint',
            'description' => 'Easy vegan pasta recipe',
            'category' => 'Lunch',
            'prep_time' => '40 mins',
            'method' => 'Step 1 : Cook the pasta according to the packet instructions. Drain and set aside. # Step 2 : Destone the avocado, then put the avocado flesh, garlic, coconut oil, salt, lemon juice, zest and mint leaves into a blender with 4 tablespoons of water. (Alternatively, you can put everything in a bowl or pan and use a stick blender.) # Step 3 : Blend until you get a smooth paste. If you find the mixture is struggling to move, add another tablespoon of water and try again. Put the pasta into a serving bowl and pour over the sauce. Add the peas and mix until all the pasta is coated in green goodness. # Step 4 : For a little kick, I like to take a red chilli and grate it over the top. This is optional, but worth doing if you like chilli!',
            'num_servings' => '4',
            'img_url' => 'https://ichef.bbci.co.uk/food/ic/food_16x9_1600/recipes/avocado_pasta_with_peas_31700_16x9.jpg',
            'img_alt' => 'vegan_avocado_pasta_with_peas'
        ]);
    }
}
