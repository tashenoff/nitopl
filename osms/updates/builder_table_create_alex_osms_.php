<?php namespace Alex\Osms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexOsms extends Migration
{
    public function up()
    {
        Schema::create('alex_osms_', function($table)
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
        Schema::dropIfExists('alex_osms_');
    }
}
