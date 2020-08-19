<?php namespace Alex\Klinika\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexKlinika extends Migration
{
    public function up()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->text('metodic');
        });
    }
    
    public function down()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->dropColumn('metodic');
        });
    }
}
