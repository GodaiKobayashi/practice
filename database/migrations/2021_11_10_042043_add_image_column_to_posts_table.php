<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    

    public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('image', 100)->nullable();
    });
} 
     
    // public function up()
    // {
    //     Schema::table('posts', function (Blueprint $table) {
    //         //
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
