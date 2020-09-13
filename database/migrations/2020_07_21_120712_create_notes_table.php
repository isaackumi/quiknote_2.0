<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // since a note belongs to a user
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string("note_title");
            $table->string("note_thumbnail")->nullable();
            $table->string("note_description");
            $table->string("note_type");
            $table->string("note_pdf")->nullable();
            $table->string("note_pdf_image_sample")->nullable();
            $table->text("note_creator_achievements");
            $table->integer("note_price");
            $table->string("course_name");
            $table->integer('user_id'); // user id as a foreign key
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
        Schema::dropIfExists('notes');
    }
}
