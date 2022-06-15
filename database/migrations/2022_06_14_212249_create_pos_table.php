<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sector_id')->constrained('sectors')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
            $table->string('picture')->nullable();
            $table->string('manager_name');
            $table->string('manager_contact');
            $table->string('pos_type');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('plv');
            $table->text('note');
            $table->integer('etat')->default(1);
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
        Schema::dropIfExists('pos');
    }
}
