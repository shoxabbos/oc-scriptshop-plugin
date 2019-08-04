<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosItmakerStoreItems2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_scriptshop_store_items', function($table)
        {
            $table->text('details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_scriptshop_store_items', function($table)
        {
            $table->dropColumn('details');
        });
    }
}