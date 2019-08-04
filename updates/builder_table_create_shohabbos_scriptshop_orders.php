<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosScriptshopOrders extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_scriptshop_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('phone');
            $table->integer('script_id')->unsigned();
            $table->integer('amount');
            $table->text('detail')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_scriptshop_orders');
    }
}
