<?php namespace Alex\Activity\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexActivity extends Migration
{
    public function up()
    {
        Schema::create('alex_activity_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->nullable()->unsigned();
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_activity_');
    }
}
