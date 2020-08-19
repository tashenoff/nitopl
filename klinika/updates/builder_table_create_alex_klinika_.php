<?php namespace Alex\Klinika\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexKlinika extends Migration
{
    public function up()
    {
        Schema::create('alex_klinika_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('spec');
            $table->text('bed');
            $table->text('name');
            $table->text('desc');
            $table->text('phone');
            $table->text('mail');
            $table->text('proff');
            $table->text('desc_spec');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_klinika_');
    }
}
