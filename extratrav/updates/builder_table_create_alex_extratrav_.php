<?php namespace Alex\Extratrav\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexExtratrav extends Migration
{
    public function up()
    {
        Schema::create('alex_extratrav_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('links');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_extratrav_');
    }
}
