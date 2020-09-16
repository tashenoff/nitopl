<?php namespace Alex\Boss\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexBoss2 extends Migration
{
    public function up()
    {
        Schema::table('alex_boss_', function($table)
        {
            $table->text('mailtwo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_boss_', function($table)
        {
            $table->time('mailtwo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
