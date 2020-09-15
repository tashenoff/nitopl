<?php namespace Alex\Kato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexKato extends Migration
{
    public function up()
    {
        Schema::create('alex_kato_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_kato_');
    }
}
