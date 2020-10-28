<?php namespace Alex\Pacientpos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexPacientpos extends Migration
{
    public function up()
    {
        Schema::create('alex_pacientpos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_pacientpos_');
    }
}
