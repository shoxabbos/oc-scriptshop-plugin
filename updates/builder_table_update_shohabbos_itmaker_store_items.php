<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosItmakerStoreItems extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_scriptshop_store_items', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_scriptshop_store_items', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}