<?php namespace Alex\Voprosi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexVoprosi extends Migration
{
    public function up()
    {
        Schema::table('alex_voprosi_', function($table)
        {
            $table->date('answer_date');
            $table->text('answer_text');
            $table->renameColumn('title', 'question_title');
            $table->renameColumn('comment', 'question_text');
            $table->renameColumn('date', 'qwestion_date');
        });
    }
    
    public function down()
    {
        Schema::table('alex_voprosi_', function($table)
        {
            $table->dropColumn('answer_date');
            $table->dropColumn('answer_text');
            $table->renameColumn('question_title', 'title');
            $table->renameColumn('question_text', 'comment');
            $table->renameColumn('qwestion_date', 'date');
        });
    }
}
