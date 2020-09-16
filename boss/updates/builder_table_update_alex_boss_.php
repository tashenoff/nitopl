<?php namespace Alex\Boss\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexBoss extends Migration
{
    public function up()
    {
        Schema::table('alex_boss_', function($table)
        {
            $table->time('mailtwo');
        });
    }
    
    public function down()
    {
        Schema::table('alex_boss_', function($table)
        {
            $table->dropColumn('mailtwo');
        });
    }
}
