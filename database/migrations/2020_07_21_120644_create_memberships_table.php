<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('momo')->unique();
            $table->string('package_name');
            $table->string('network');
            //if u dont want to be doing plenty checks when deleting records in the database then,
            $table->integer('user_id'); // thats all
            $table->timestamps();

            // u can also add soft delete to all ur migrations
            $table->softDeletes(); // this add a new column called delete_at[date]. by default its null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
