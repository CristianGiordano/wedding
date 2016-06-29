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
            'guests'     => [
                ['name' => 'Jan Giordano', 'is_attending' => true],
                ['name' => 'Dario Giordano', 'is_attending' => true],
            ],
            'surname'    => 'giordano',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Thurlow',
            'guests'     => [
                ['name' => 'Gaz Thurlow', 'is_attending' => true],
                ['name' => 'Kristina Thurlow', 'is_attending' => true],
            ],
            'surname'    => 'thurlow',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Partridge',
            'guests'     => [
                ['name' => 'Sam Partridge', 'is_attending' => true],
                ['name' => 'Anna Partridge', 'is_attending' => true],
                ['name' => 'Rosie Partridge', 'is_attending' => true],
            ],
            'surname'    => 'partridge',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs ',
            'guests'     => [
                ['name' => '', 'is_attending' => true],
                ['name' => '', 'is_attending' => true],
            ],
            'surname'    => '',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Hutchinson',
            'guests'     => [
                ['name' => 'Dave Hutchinson', 'is_attending' => true],
                ['name' => 'Pat Hutchinson', 'is_attending' => true],
            ],
            'surname'    => 'hutchinson',
        ]);

        Rsvp::create([
            'recipients' => 'Mr Dove & Miss Bowler ',
            'guests'     => [
                ['name' => 'Chris Dove', 'is_attending' => true],
                ['name' => 'Sarah Bowler', 'is_attending' => true],
            ],
            'surname'    => 'dove|bowler',
        ]);

        Rsvp::create([
            'recipients' => 'Mr & Mrs Cumber',
            'guests'     => [
                ['name' => 'Gavin Cumber', 'is_attending' => true],
                ['name' => 'Emma Cumber', 'is_attending' => true],
            ],
            'surname'    => 'cumber',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Ward & Miss Reid',
            'guests'     => [
                ['name' => 'Joe Ward', 'is_attending' => true],
                ['name' => 'Nikki Reid', 'is_attending' => true],
            ],
            'surname'    => 'ward',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Burbury & Miss Reynolds',
            'guests'     => [
                ['name' => 'Darren Burbury', 'is_attending' => true],
                ['name' => 'Hollie Reynolds', 'is_attending' => true],
            ],
            'surname'    => 'burbury|reynolds',
        ]);
        Rsvp::create([
            'recipients' => 'Miss Williams',
            'guests'     => [
                ['name' => 'Louise Emily Williams', 'is_attending' => true],
            ],
            'surname'    => 'williams',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Edmondson & Miss Larbey',
            'guests'     => [
                ['name' => 'Simon Edmondson', 'is_attending' => true],
                ['name' => 'Fiona Larbey', 'is_attending' => true],
            ],
            'surname'    => 'edmondson|larbey',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Lumley & Miss Gray',
            'guests'     => [
                ['name' => 'James Lumley', 'is_attending' => true],
                ['name' => 'Steph Gray', 'is_attending' => true],
            ],
            'surname'    => 'lumley|gray',
        ]);
        Rsvp::create([
            'recipients' => 'Mr & Mrs Harding',
            'guests'     => [
                ['name' => 'Drew Harding', 'is_attending' => true],
                ['name' => 'Ryte Harding', 'is_attending' => true],
            ],
            'surname'    => 'harding',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Everard & Miss Virley',
            'guests'     => [
                ['name' => 'Tom Everard', 'is_attending' => true],
                ['name' => 'Alex Virley', 'is_attending' => true],
            ],
            'surname'    => 'everard|virley',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Mullen',
            'guests'     => [
                ['name' => 'Adam Mullen', 'is_attending' => true],
            ],
            'surname'    => 'mullen',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Cole',
            'guests'     => [
                ['name' => 'Simon Cole', 'is_attending' => true],
            ],
            'surname'    => 'cole',
        ]);
        Rsvp::create([
            'recipients' => 'Mr Wills & Miss Harris',
            'guests'     => [
                ['name' => 'Gary Wills', 'is_attending' => true],
                ['name' => 'Jane Harris', 'is_attending' => true],
            ],
            'surname'    => 'wills|harris',
        ]);
        Rsvp::create([
            'recipients' => 'Mr & Mrs West',
            'guests'     => [
                ['name' => 'Mike West', 'is_attending' => true],
                ['name' => 'Julia West', 'is_attending' => true],
            ],
            'surname'    => 'west',
        ]);
    }
}
