<?php namespace Alex\Bibkioteka\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexBibkioteka extends Migration
{
    public function up()
    {
        Schema::table('alex_bibkioteka_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_bibkioteka_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
