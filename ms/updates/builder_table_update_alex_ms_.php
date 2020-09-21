<?php namespace Alex\Ms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexMs extends Migration
{
    public function up()
    {
        Schema::table('alex_ms_', function($table)
        {
            $table->text('links');
        });
    }
    
    public function down()
    {
        Schema::table('alex_ms_', function($table)
        {
            $table->dropColumn('links');
        });
    }
}
