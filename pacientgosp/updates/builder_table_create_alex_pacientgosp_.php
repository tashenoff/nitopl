<?php namespace Alex\Pacientgosp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexPacientgosp extends Migration
{
    public function up()
    {
        Schema::create('alex_pacientgosp_', function($table)
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
        Schema::dropIfExists('alex_pacientgosp_');
    }
}
