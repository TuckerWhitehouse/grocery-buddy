<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $stores = ['Market Basket' => [[
            'Jello - green & orange' => 4,
            'Cracker Barrel cheese - green package' => 4,
            'Sarento Shredded Mozarella Cheese' => 0,
            'Dannon Coffee Yogurt' => 12,
            'Large Eggs' => 0,
            'Ricotta Cheese' => 0,
            'Milk' => 2,
            'Gluten free choc chip cookie mix' => 2,
        ], [
            'Pickles' => 0,
            'Vinegarette salad dressing' => 2,
            'Vadalia Onion Salad dressing' => 0,
            'Hint of Lime Chips' => 0,
            'B&M Baked Beans' => 0,
            'Crisco Oil' => 0,
            'Pam original spray' => 0,
            'Lite Blue Cheese salad dressing' => 2,
            'Ranch salad dressing' => 0,
            'Ortega Taco Shells' => 2,
        ], [
            'Kellogs Special K pretzel granola bars' => 4,
            'Corn Chex Cereal' => 2,
            'Cinnamon Chex Cereal' => 2,
            'Cheerios' => 2,
        ], [
            'Prego 3 Cheese pasta sauce' => 0,
            'Minute Rice' => 0,
            'Parmesian Cheese' => 0,
        ], [
            'Del-Monte Green Beans - cut' => 0,
            'Pink Grapefruit Juice 50% less' => 0,
            'Lite white grape juice' => 0,
            'yellow gatorade' => 0,
        ], [
            'Pepper balls' => 0,
            'Morton Salt' => 0,
            'Truvia sugar container' => 0,
            'Truvia sugar packets' => 0,
            'Hershey\'s Chocolate syrup - Lite' => 0,
            'Apple cider instant packets' => 0,
            'Lipton decaf tea bags' => 0,
            'Dunkin Donute Regular coffee' => 0,
            '# 4 coffee filters' => 0,
        ], [
            'Nut thins - cheddar crackers' => 4,
            'Special K sour cream chips' => 0,
            'Special K cheddar chips' => 0,
            'Bisquick Gluten Free pancake mix' => 0,
            'Aunt Jemima Lite maple syrup' => 0,
            'Applesauce - original' => 0,
            'Trident Spearment gum' => 0,
            '5 - gum' => 0,
            'Candy for work' => 0,
        ], [
            'Large ziploc bags - 1 gallon' => 0,
            'Ziploc sandwich bags' => 0,
        ], [
            'Northern toilet paper' => 0,
        ], [
            'Suave spray deoderant' => 0,
            'Axe dark temptations deodorant' => 0,
            'Lady Mitchum clear roll on deoderant' => 0,
            'Colgate toothpaste' => 0,
        ], [
            'small tissue boxes' => 3,
            'large kleenex boxes' => 3,
            'Squeezable fruit packs for Jack' => 4,
        ], [
            'Paper plates' => 0,
            'Napkins' => 0,
            'Plastic spoons' => 0,
            '9 oz plastic cups' => 0,
            'Paper Towels' => 0,
        ], [

        ], [
            'Tide w/bleach - He - front load washers' => 0,
            'Bounce fresh air scent sheets' => 0,
            'Dawn dish soap' => 0,
            'Cascade dishwasher packets' => 0,
            'Lysol wipes' => 0,
            'Jet Dry' => 0,
            'Wrinkle remover' => 0,
            'sponges - package of 3' => 0,
        ], [
            'Lemon Flavored Water' => 2,
            'Berry Flavored Water' => 2,
        ], [
            'Vanilla coke' => 1,
            'Diet Coke' => 1,
        ], [
            'Pop Secret Popcorn - 100 calorie' => 2,
            'Pop Secret Popcorn - regular' => 2,
            'UTZ ruffle potato chips' => 0,
            'UTZ sour cream & onion chips' => 0,
            'Popchips' => 0,
        ], [
            'Pinot Grigio - Santa Margarita' => 0,
        ], [
            'Bell & Evans Gluten Free Chicken Tenders' => 4,
            'Frozen stuffed chicken breast - scallop & lobster stuffing' => 2,
            'Frozen stuffed chicken breast - regular stuffing' => 2,
            'Frozen stuffed chicken breast - ham & cheese' => 0,
            'Frozen aunt jemima breakfast meals' => 0,
            'Frozen fruit - blueberries' => 0,
            'Frozen fruit - rasberries' => 0,
            'Frozen fruit - peaches' => 0,
        ], [
            'Frozen Oreida Regular French Fries' => 0,
            'Frozen steamed corn' => 0,
            'Frozen steam meals' => 0,
        ], [
            'Tomatoes' => 3,
            'Cucumbers' => 0,
            'Red Peppers' => 0,
            'Bananas' => 1,
            'Bag of salad' => 3,
            'Apples - gala' => 0,
            'Grapes - seedless red' => 0,
            'Chopped veggies' => 1,
            'Healthy Choice wheat bread 45 calories' => 2,
            'Edy\'s Coffee Ice Cream 1/2 the fat' => 0,
            'Ben & Jerry\'s Peanut Butter Cup ice cream' => 0,
        ]]];

        $shoppingList = App\shoppingList::create(['name' => 'Weekly']);

        foreach($stores as $store => $locations) {
            $store = App\Store::create(['name' => $store]);

            foreach($locations as $location => $products) {
                $location = App\Location::create(['store_id' => $store->id, 'description' => 'Aisle '.$location]);

                foreach($products as $product => $quantity) {
                    $product = App\Product::create(['name' => $product]);

                    $grocery = App\Grocery::create(['location_id' => $location->id, 'product_id' => $product->id]);

                    if ($quantity) {
                        $item = App\Item::create(['shopping_list_id' => $shoppingList->id, 'grocery_id' => $grocery->id, 'quantity' => $quantity]);
                    }
                }
            }
        }

        Model::reguard();
    }
}
