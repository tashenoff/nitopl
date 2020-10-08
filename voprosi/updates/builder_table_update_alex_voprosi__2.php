<?php namespace Alex\Voprosi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexVoprosi2 extends Migration
{
    public function up()
    {
        Schema::table('alex_voprosi_', function($table)
        {
            $table->text('question_text')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_voprosi_', function($table)
        {
            $table->time('question_text')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
