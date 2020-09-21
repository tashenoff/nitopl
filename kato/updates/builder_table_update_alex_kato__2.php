<?php namespace Alex\Kato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexKato2 extends Migration
{
    public function up()
    {
        Schema::table('alex_kato_', function($table)
        {
            $table->dropColumn('link');
            $table->dropColumn('linktitle');
        });
    }
    
    public function down()
    {
        Schema::table('alex_kato_', function($table)
        {
            $table->text('link');
            $table->text('linktitle');
        });
    }
}
