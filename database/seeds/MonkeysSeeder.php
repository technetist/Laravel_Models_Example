<?php

use Illuminate\Database\Seeder;
use App\Models\Monkey;
use App\Models\Hotel;
use App\Models\Fruit;
use App\Models\Tree;

class MonkeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monkeys')->delete();
        DB::table('fruit')->delete();
        DB::table('hotels')->delete();
        DB::table('trees')->delete();
        DB::table('monkeys_hotels')->delete();

        $monkeyJoe = Monkey::create(array(
            'name' => 'Joe',
            'type' => 'Baboon',
            'happiness_level' => 8
        ));

        $monkeyBrenda= Monkey::create(array(
            'name' => 'Brenda',
            'type' => 'Gorilla',
            'happiness_level' => 4
        ));

        $this->command->info('Monkeys Added');


        Fruit::create(array(
           'amount' => 15,
           'monkey_id' => $monkeyJoe->id
        ));

        Fruit::create(array(
            'amount' => 23,
            'monkey_id' => $monkeyBrenda->id
        ));

        $this->command->info('Fruit Added');

        Tree::create(array(
            'type' => 'Oak',
            'height' => 15,
            'monkey_id' => $monkeyJoe->id
        ));

        Tree::create(array(
            'type' => 'Elm',
            'height' => 23,
            'monkey_id' => $monkeyBrenda->id
        ));

        Tree::create(array(
            'type' => 'Birch',
            'height' => 10,
            'monkey_id' => $monkeyJoe->id
        ));

        $this->command->info('Tree Added');

        $hotelHilton = Hotel::create(array(
            'name' => 'Hilton',
            'rating' => 8
        ));

        $hotelCalifornia = Hotel::create(array(
            'name' => 'Hotel California',
            'rating' => 3
        ));

        $monkeyJoe->hotels()->attach($hotelCalifornia->id);
        $monkeyJoe->hotels()->attach($hotelHilton->id);

        $monkeyBrenda->hotels()->attach($hotelCalifornia->id);

        $this->command->info('Hotels Added');
    }
}
