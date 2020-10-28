<?php namespace Alex\Respsporttravm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexRespsporttravm extends Migration
{
    public function up()
    {
        Schema::create('alex_respsporttravm_', function($table)
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
        Schema::dropIfExists('alex_respsporttravm_');
    }
}
