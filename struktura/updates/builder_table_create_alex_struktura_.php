<?php namespace Alex\Struktura\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexStruktura extends Migration
{
    public function up()
    {
        Schema::create('alex_struktura_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_struktura_');
    }
}
