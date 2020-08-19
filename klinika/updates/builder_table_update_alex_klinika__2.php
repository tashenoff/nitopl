<?php namespace Alex\Klinika\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexKlinika2 extends Migration
{
    public function up()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->text('persona')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->dropColumn('persona');
        });
    }
}
