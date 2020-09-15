<?php namespace Alex\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexSlider extends Migration
{
    public function up()
    {
        Schema::create('alex_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('img');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_slider_');
    }
}
