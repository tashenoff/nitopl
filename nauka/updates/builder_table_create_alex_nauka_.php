<?php namespace Alex\Nauka\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexNauka extends Migration
{
    public function up()
    {
        Schema::create('alex_nauka_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_nauka_');
    }
}
