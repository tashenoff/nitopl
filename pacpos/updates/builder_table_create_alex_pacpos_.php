<?php namespace Alex\Pacpos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexPacpos extends Migration
{
    public function up()
    {
        Schema::create('alex_pacpos_', function($table)
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
        Schema::dropIfExists('alex_pacpos_');
    }
}
