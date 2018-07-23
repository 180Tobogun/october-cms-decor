<?php namespace Andrey\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyCatalog3 extends Migration
{
    public function up()
    {
        Schema::table('andrey_catalog_', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
    
    public function down()
    {
        Schema::table('andrey_catalog_', function($table)
        {
            $table->boolean('is_active')->nullable();
        });
    }
}
