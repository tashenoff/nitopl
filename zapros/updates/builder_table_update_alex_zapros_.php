<?php namespace Alex\Zapros\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexZapros extends Migration
{
    public function up()
    {
        Schema::table('alex_zapros_', function($table)
        {
            $table->text('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_zapros_', function($table)
        {
            $table->time('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
