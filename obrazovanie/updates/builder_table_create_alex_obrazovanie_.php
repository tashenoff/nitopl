<?php namespace Alex\Obrazovanie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexObrazovanie extends Migration
{
    public function up()
    {
        Schema::create('alex_obrazovanie_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->nullable();
            $table->text('title');
            $table->text('links');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_obrazovanie_');
    }
}
