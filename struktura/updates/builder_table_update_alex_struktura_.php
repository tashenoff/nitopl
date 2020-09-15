<?php namespace Alex\Struktura\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexStruktura extends Migration
{
    public function up()
    {
        Schema::table('alex_struktura_', function($table)
        {
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::table('alex_struktura_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
