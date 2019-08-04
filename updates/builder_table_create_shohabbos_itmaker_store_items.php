<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosItmakerStoreItems extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_scriptshop_store_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('excerpt');
            $table->integer('price');
            $table->string('demo_link');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_scriptshop_store_items');
    }
}