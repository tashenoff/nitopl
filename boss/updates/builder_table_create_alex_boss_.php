<?php namespace Alex\Boss\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexBoss extends Migration
{
    public function up()
    {
        Schema::create('alex_boss_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('caption');
            $table->text('phone');
            $table->text('mail');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_boss_');
    }
}
