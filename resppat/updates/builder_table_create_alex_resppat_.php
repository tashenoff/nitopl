<?php namespace Alex\Resppat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexResppat extends Migration
{
    public function up()
    {
        Schema::create('alex_resppat_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
            $table->text('links');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_resppat_');
    }
}
