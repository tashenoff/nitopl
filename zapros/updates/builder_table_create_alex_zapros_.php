<?php namespace Alex\Zapros\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexZapros extends Migration
{
    public function up()
    {
        Schema::create('alex_zapros_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->date('date');
            $table->time('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_zapros_');
    }
}
