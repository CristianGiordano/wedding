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
            'guest_names' => 'Mr & Mrs Giordano',
            'surname' => 'giordano',
        ]);

        Rsvp::create([
            'guest_names' => 'Mr & Mrs Thurlow',
            'surname' => 'thurlow',
        ]);

        Rsvp::create([
            'guest_names' => 'Mr & Mrs Partridge',
            'surname' => 'partridge',
        ]);
    }
}
