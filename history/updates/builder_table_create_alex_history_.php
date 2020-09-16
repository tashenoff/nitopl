<?php namespace Alex\History\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexHistory extends Migration
{
    public function up()
    {
        Schema::create('alex_history_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_history_');
    }
}
