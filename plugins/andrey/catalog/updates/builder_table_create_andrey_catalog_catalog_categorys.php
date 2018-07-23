<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyCatalogCatalogCategorys extends Migration
{
    public function up()
    {
        Schema::create('andrey_catalog_catalog_categorys', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('catalog_id');
            $table->integer('category_id');
            $table->primary(['catalog_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_catalog_catalog_categorys');
    }
}
