<?php namespace Alex\Zakupki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexZakupki extends Migration
{
    public function up()
    {
        Schema::create('alex_zakupki_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_zakupki_');
    }
}
