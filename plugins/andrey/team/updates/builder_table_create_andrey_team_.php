<?php namespace Andrey\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyTeam extends Migration
{
    public function up()
    {
        Schema::create('andrey_team_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_team_');
    }
}
