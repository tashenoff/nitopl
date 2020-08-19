<?php namespace Alex\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexNews extends Migration
{
    public function up()
    {
        Schema::table('alex_news_', function($table)
        {
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_news_', function($table)
        {
            $table->time('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
