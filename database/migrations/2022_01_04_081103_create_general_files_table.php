<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_files', function (Blueprint $table) {
            $table->increments("id");
            $table->string("from_type")->nullable()->default(null);
            $table->string("to_type")->nullable()->default(null);
            $table->string("file")->nullable()->default(null);
            $table->string("converted_file")->nullable()->default(null);
            $table->bigInteger("user_id")->default(0);
            $table->string("groupid")->nullable()->default(null);
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
        Schema::dropIfExists('general_files');
    }
}
