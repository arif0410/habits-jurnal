<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->id();
            $table->string('studentName');
            $table->string('studentSerial');
            $table->string('studentClass');
            $table->date('date');
            $table->json('morningSport')->nullable();
            $table->time('wakeUpTime');
            $table->json('worship')->nullable();
            $table->json('prayer')->nullable();
            $table->string('breakfast');
            $table->string('learningActivity');
            $table->text('communityActivity')->nullable();
            $table->time('bedtime')->nullable();
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
        Schema::dropIfExists('habits');
    }
};
