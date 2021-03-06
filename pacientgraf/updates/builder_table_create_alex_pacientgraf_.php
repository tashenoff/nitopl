<?php namespace Alex\Pacientgraf\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexPacientgraf extends Migration
{
    public function up()
    {
        Schema::create('alex_pacientgraf_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_pacientgraf_');
    }
}
