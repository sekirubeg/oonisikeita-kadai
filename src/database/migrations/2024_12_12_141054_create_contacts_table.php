<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 255); // VARCHAR(255)
            $table->string('last_name', 255); // VARCHAR(255)
            $table->tinyInteger('gender'); // TINYINT (1: 男性, 2: 女性, 3: その他)
            $table->string('email', 255); // VARCHAR(255)
            $table->string('tel', 255); // VARCHAR(255)
            $table->string('address', 255); // VARCHAR(255)
            $table->string('building', 255); // VARCHAR(255)
            $table->text('detail'); // TEXT
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('contacts');
    }
}
