<?php namespace Andrey\Howwework\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyHowwework extends Migration
{
    public function up()
    {
        Schema::table('andrey_howwework_', function($table)
        {
            $table->integer('pos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_howwework_', function($table)
        {
            $table->dropColumn('pos');
        });
    }
}
