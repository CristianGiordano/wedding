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
            'guest_names' => 'Mr & Mrs Giordano [Test]',
            'surname' => 'giordano',
        ]);
    }
}
