<?php namespace Alex\Activity\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexActivity2 extends Migration
{
    public function up()
    {
        Schema::table('alex_activity_', function($table)
        {
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::table('alex_activity_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
