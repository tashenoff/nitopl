<?php namespace Alex\Vakansii\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexVakansii extends Migration
{
    public function up()
    {
        Schema::create('alex_vakansii_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_vakansii_');
    }
}
