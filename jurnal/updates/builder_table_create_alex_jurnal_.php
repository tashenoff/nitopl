<?php namespace Alex\Jurnal\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexJurnal extends Migration
{
    public function up()
    {
        Schema::create('alex_jurnal_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_jurnal_');
    }
}
