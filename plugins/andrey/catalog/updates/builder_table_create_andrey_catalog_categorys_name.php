<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyCatalogCategorysName extends Migration
{
    public function up()
    {
        Schema::create('andrey_catalog_categorys_name', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_catalog_categorys_name');
    }
}
