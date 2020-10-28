<?php namespace Alex\Pacientsupport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexPacientsupport extends Migration
{
    public function up()
    {
        Schema::create('alex_pacientsupport_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_pacientsupport_');
    }
}
