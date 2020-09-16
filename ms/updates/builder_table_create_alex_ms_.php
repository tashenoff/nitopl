<?php namespace Alex\Ms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexMs extends Migration
{
    public function up()
    {
        Schema::create('alex_ms_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_ms_');
    }
}
