<?php namespace Alex\Activision\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexActivision extends Migration
{
    public function up()
    {
        Schema::create('alex_activision_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_activision_');
    }
}
