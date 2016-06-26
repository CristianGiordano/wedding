<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guest_names');
            $table->string('surname');
            $table->boolean('is_attending')->nullable();
            $table->enum('preference_arrival_drink', ['pimms', 'prosecco', 'soft'])->nullable();
            $table->enum('preference_table_drink', ['red', 'white', 'soft'])->nullable();
            $table->boolean('has_dietry_requirements')->default(false);
            $table->text('dietry_requirements')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rsvp');
    }
}
