<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255); // Имя Фамилия Очество
            $table->string('location_work', 255); // Место работы
            $table->string('phone'); // Телефон
            $table->string('social_link'); // Ссылки на соц. сети
            $table->foreignId('type_procedure_id')->constrained('type_procedure')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master');
    }
}
