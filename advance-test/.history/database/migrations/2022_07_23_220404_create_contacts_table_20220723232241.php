<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigint('id',20)->unsigned();
            /*$table->string('id', 30);*/
            $table->string('name', 255)->nullable(false);
            
            $table->tinyint('1:男性 2:女性')->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->char('postcode', 8)->nullable(false);

  

            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();

 /*id:bigint unsigned PRIMARY KEY
 fullname:varchar(255) NOT NULL
 gender:tinyint NOT NULL (1:男性 2:女性)
 email:varchar(255) NOT NULL
 postcode:char(8) NOT NULL
 address:varchar(255) NOT NULL
 building_name:varchar(255)
 opinion:text NOT NULL
 created_at:timestamp
 updated_at:timestamp*/





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
