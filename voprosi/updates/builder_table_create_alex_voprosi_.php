<?php namespace Alex\Voprosi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexVoprosi extends Migration
{
    public function up()
    {
        Schema::create('alex_voprosi_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('name');
            $table->time('comment');
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_voprosi_');
    }
}
