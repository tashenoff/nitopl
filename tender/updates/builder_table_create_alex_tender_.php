<?php namespace Alex\Tender\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexTender extends Migration
{
    public function up()
    {
        Schema::create('alex_tender_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('title');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_tender_');
    }
}
