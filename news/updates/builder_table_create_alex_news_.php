<?php namespace Alex\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexNews extends Migration
{
    public function up()
    {
        Schema::create('alex_news_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('desc');
            $table->text('full_desc');
            $table->time('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_news_');
    }
}
