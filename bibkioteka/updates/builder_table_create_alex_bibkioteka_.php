<?php namespace Alex\Bibkioteka\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexBibkioteka extends Migration
{
    public function up()
    {
        Schema::create('alex_bibkioteka_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
            $table->text('links');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_bibkioteka_');
    }
}
