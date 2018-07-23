<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyCatalog extends Migration
{
    public function up()
    {
        Schema::table('andrey_catalog_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_catalog_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
