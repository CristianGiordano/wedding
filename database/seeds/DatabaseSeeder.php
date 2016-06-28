<?php

use App\Rsvp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

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

        Rsvp::truncate();

        Rsvp::create([
            'recipients' => 'Mr & Mrs Giordano',
            'guests' => [
                ['name' => 'Jan Giordano', 'is_attending' => true],
                ['name' => 'Dario Giordano', 'is_attending' => true],
            ],
            'surname' => 'giordano',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Thurlow',
            'guests' => [
                ['name' => 'Gaz Thurlow', 'is_attending' => true],
                ['name' => 'Kristina Thurlow', 'is_attending' => true],
            ],
            'surname' => 'thurlow',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Partridge',
            'guests' => [
                ['name' => 'Sam Partridge', 'is_attending' => true],
                ['name' => 'Anna Partridge', 'is_attending' => true],
                ['name' => 'Rosie Partridge', 'is_attending' => true],
            ],
            'surname' => 'partridge',
        ]);
    }
}
