<?php namespace Alex\Missia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexMissia extends Migration
{
    public function up()
    {
        Schema::create('alex_missia_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_missia_');
    }
}
