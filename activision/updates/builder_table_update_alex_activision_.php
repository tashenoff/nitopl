<?php namespace Alex\Activision\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexActivision extends Migration
{
    public function up()
    {
        Schema::table('alex_activision_', function($table)
        {
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::table('alex_activision_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
