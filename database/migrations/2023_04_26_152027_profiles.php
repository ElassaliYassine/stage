<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Profile ;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users') 
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('address' , 100 )->nullable();
            $table->string('url_facebook' , 100 )->nullable();
            $table->string('url_instagram' , 100 )->nullable();
            $table->date('brithday')->nullable();
            $table->string('gender' , 100 )->nullable();
            $table->string('work' , 100 )->nullable();
            $table->string('region' , 100 )->nullable();
            $table->string('city' , 100 )->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 
    }
};
