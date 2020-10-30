<?php namespace Alex\Corp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexCorp extends Migration
{
    public function up()
    {
        Schema::create('alex_corp_', function($table)
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
        Schema::dropIfExists('alex_corp_');
    }
}
