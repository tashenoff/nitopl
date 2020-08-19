<?php namespace Alex\Tender\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexTender extends Migration
{
    public function up()
    {
        Schema::table('alex_tender_', function($table)
        {
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::table('alex_tender_', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
