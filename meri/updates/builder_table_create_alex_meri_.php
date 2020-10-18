<?php namespace Alex\Meri\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexMeri extends Migration
{
    public function up()
    {
        Schema::create('alex_meri_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
            $table->text('title');
            $table->text('links');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_meri_');
    }
}
