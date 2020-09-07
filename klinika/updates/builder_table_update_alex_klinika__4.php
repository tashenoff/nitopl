<?php namespace Alex\Klinika\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexKlinika4 extends Migration
{
    public function up()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->text('linkp');
            $table->text('persona')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_klinika_', function($table)
        {
            $table->dropColumn('linkp');
            $table->text('persona')->default('NULL')->change();
        });
    }
}
