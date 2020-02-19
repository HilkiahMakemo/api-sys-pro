<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_trees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('site_tree_id')->default(-1);
            $table->bigInteger('user_id')->default(-1);
            $table->string('title')->nullable();
            $table->string('label')->nullable();
            $table->string('route')->nullable();
            $table->text('metadata')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_trees');
    }
}
