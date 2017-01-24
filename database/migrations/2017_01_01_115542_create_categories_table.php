<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id',100);
			$table->string('name');
			$table->timestamps();
         
<<<<<<< HEAD
			$table->engine = 'InnoDB';
			$table->unique('name');
        });
=======
			
		
			$table->engine = 'InnoDB';
			$table->unique('name');
			
		

        });
		
					
>>>>>>> 2405146f2ca736a9b705733b6e9d047983c51929
			
		 Schema::create('categories_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->nullableTimestamps();

            $table->engine = 'InnoDB';
            $table->primary(['user_id', 'categories_id']);
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
		Schema::drop('categories_user');
    }

}