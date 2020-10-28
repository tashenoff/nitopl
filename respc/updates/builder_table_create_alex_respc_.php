<?php namespace Alex\Respc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexRespc extends Migration
{
    public function up()
    {
        Schema::create('alex_respc_', function($table)
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
        Schema::dropIfExists('alex_respc_');
    }
}
