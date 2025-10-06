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
            if (Schema::hasColumn('contact_practice1s', 'content')) {
                $table->renameColumn('content', 'detail');
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
            if (Schema::hasColumn('contact_practice1s', 'detail')) {
                $table->renameColumn('detail', 'content');
        };
    }
}
