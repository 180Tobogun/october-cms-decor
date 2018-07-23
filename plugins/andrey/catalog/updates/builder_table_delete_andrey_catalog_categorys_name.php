<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAndreyCatalogCategorysName extends Migration
{
    public function up()
    {
        Schema::dropIfExists('andrey_catalog_categorys_name');
    }
    
    public function down()
    {
        Schema::create('andrey_catalog_categorys_name', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_name', 191);
            $table->string('slug', 191);
        });
    }
}
