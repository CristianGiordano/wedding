<?php

use App\Rsvp;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreRsvp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Rsvp::forceCreate([
            'recipients' => 'Mr Cumber & Ms Lily-Victoria Clarke',
            'guests'     => [
                ['name' => 'Damien Cumber', 'is_attending' => true],
                ['name' => 'Lily-Victoria Clarke', 'is_attending' => true],
            ],
            'surname'    => 'cumber|clarke',
        ]);

        Rsvp::forceCreate([
            'recipients' => 'Mr Hite',
            'guests'     => [
                ['name' => 'Chris Hite', 'is_attending' => true],
            ],
            'surname'    => 'hite',
        ]);

        Rsvp::forceCreate([
            'recipients' => 'Ms Doherty',
            'guests'     => [
                ['name' => 'Louise Doherty', 'is_attending' => true],
            ],
            'surname'    => 'doherty',
        ]);

        Rsvp::forceCreate([
            'recipients' => 'Mr & Mrs Bye',
            'guests'     => [
                ['name' => 'Jen Bye', 'is_attending' => true],
                ['name' => 'John Bye', 'is_attending' => true],
            ],
            'surname'    => 'bye',
        ]);

        Rsvp::forceCreate([
            'recipients' => 'Mr Rulton & Ms Nayak',
            'guests'     => [
                ['name' => 'Zippy', 'is_attending' => true],
                ['name' => 'Asha Nayak', 'is_attending' => true],
            ],
            'surname'    => 'rulton|zippy|nayak|asha',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
