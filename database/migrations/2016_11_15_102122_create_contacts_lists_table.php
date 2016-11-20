<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_list', function (Blueprint $table) {


//
            // $table->increments('id');
            $table->integer('contact_id')->unsigned()->nullable();



            $table->integer('list_id')->unsigned()->nullable();


 // $table->foreign('contact_id')->references('c_id')
 //            ->on('contacts')->onDelete('cascade');



 //             $table->foreign('list_id')->references('l_id')
 //            ->on('lists')->onDelete('cascade');



           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts_lists');
    }
}
