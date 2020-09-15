<?php namespace Alex\Kontakt\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexKontakt extends Migration
{
    public function up()
    {
        Schema::create('alex_kontakt_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('adress');
            $table->text('fax');
            $table->text('email');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_kontakt_');
    }
}
