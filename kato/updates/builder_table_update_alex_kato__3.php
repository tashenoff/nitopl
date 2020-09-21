<?php namespace Alex\Kato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexKato3 extends Migration
{
    public function up()
    {
        Schema::table('alex_kato_', function($table)
        {
            $table->text('links');
        });
    }
    
    public function down()
    {
        Schema::table('alex_kato_', function($table)
        {
            $table->dropColumn('links');
        });
    }
}
