<?php namespace Alex\Finance\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexFinance extends Migration
{
    public function up()
    {
        Schema::create('alex_finance_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('link');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_finance_');
    }
}
