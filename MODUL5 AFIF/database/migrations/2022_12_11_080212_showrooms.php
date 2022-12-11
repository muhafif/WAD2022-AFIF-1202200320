<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('showrooms', function(Blueprint $table){
                $table->increments('id'); // primary key
                $table->unsignedBigInteger('user_id'); // kolom yang akan digunakan untuk foreign key pada tabel ini
                $table->foreign('user_id')->references('id')->on('users'); // menghubungkan foreign key dengan kolom id dari tabel users
                $table->string('name', 255);
                $table->string('owner', 255);
                $table->string('brand', 255);
                $table->dateTime('purchase_date');
                $table->text('description');
                $table->string('image', 255);
                $table->enum('status', ['Belum', 'Lunas']); 
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
