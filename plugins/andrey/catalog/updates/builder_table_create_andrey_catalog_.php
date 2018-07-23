<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyCatalog extends Migration
{
    public function up()
    {
        Schema::create('andrey_catalog_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_catalog_');
    }
}
