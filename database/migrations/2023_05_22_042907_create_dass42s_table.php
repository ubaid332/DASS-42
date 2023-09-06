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
        Schema::create('dass42s', function (Blueprint $table) {
            $table->id();
            $table->integer('Q1A')->nullable();
            $table->integer('Q2A')->nullable();
            $table->integer('Q3A')->nullable();
            $table->integer('Q4A')->nullable();
            $table->integer('Q5A')->nullable();
            $table->integer('Q6A')->nullable();
            $table->integer('Q7A')->nullable();
            $table->integer('Q8A')->nullable();
            $table->integer('Q9A')->nullable();
            $table->integer('Q10A')->nullable();
            $table->integer('Q11A')->nullable();
            $table->integer('Q12A')->nullable();
            $table->integer('Q13A')->nullable();
            $table->integer('Q14A')->nullable();
            $table->integer('Q15A')->nullable();
            $table->integer('Q16A')->nullable();
            $table->integer('Q17A')->nullable();
            $table->integer('Q18A')->nullable();
            $table->integer('Q19A')->nullable();
            $table->integer('Q20A')->nullable();
            $table->integer('Q21A')->nullable();
            $table->integer('Q22A')->nullable();
            $table->integer('Q23A')->nullable();
            $table->integer('Q24A')->nullable();
            $table->integer('Q25A')->nullable();
            $table->integer('Q26A')->nullable();
            $table->integer('Q27A')->nullable();
            $table->integer('Q28A')->nullable();
            $table->integer('Q29A')->nullable();
            $table->integer('Q30A')->nullable();
            $table->integer('Q31A')->nullable();
            $table->integer('Q32A')->nullable();
            $table->integer('Q33A')->nullable();
            $table->integer('Q34A')->nullable();
            $table->integer('Q35A')->nullable();
            $table->integer('Q36A')->nullable();
            $table->integer('Q37A')->nullable();
            $table->integer('Q38A')->nullable();
            $table->integer('Q39A')->nullable();
            $table->integer('Q40A')->nullable();
            $table->integer('Q41A')->nullable();
            $table->integer('Q42A')->nullable();
            $table->integer('AnxietyScore')->nullable();
            $table->string('AnxietySeverity')->nullable();
            $table->integer('DepScore')->nullable();
            $table->string('DepSeverity')->nullable();
            $table->integer('StressScore')->nullable();
            $table->string('StressSeverity')->nullable();
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
        Schema::dropIfExists('dass42s');
    }
};
