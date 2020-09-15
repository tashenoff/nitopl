<?php namespace Alex\Blogd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexBlogd extends Migration
{
    public function up()
    {
        Schema::create('alex_blogd_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_blogd_');
    }
}
