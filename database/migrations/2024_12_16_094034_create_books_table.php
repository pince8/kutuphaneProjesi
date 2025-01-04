<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('pub_id');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Kitabı ödünç alan kullanıcı'); //index()kullanıcıların hızlı sorgulanması için
           
            $table->string('name');
            $table->integer('pageNumber')->check('pageNumber > 0');
            $table->boolean('is_lended')->default(0)->comment('1--ödünç verilmiş, 0--ödünç verilmemiş');
            $table->string('barkod_no')->nullable();
            $table->integer('lend_time')->default(0)->comment('Ödünç verme süresi (gün cinsinden)');
            //$table->timestamp('deleted_at');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');//ilişkili kayıtların otomatik olarak silinmesi
            $table->foreign('author_id')->on('authors')->references('id');
            $table->foreign('pub_id')->on('publicator')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
