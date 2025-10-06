<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameContentToDetailInContactPractice1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_practice1s', function (Blueprint $table) {
                        $table->string('first_name');
            $table->string('last_name');
            $table->tinyInteger('gender');
            $table->string('email');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('tel3');
            $table->string('address');
            $table->string('building')->nullable();
            $table->string('inquiry_type');
            $table->text('detail');
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
        Schema::table('contact_practice1s', function (Blueprint $table) {
            //
        });
    }
}
