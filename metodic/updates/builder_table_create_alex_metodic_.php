<?php namespace Alex\Metodic\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexMetodic extends Migration
{
    public function up()
    {
        Schema::create('alex_metodic_', function($table)
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
        Schema::dropIfExists('alex_metodic_');
    }
}
