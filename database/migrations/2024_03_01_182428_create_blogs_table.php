<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    /**
     * php artisan make:migration create_blog_table
     * komutu yeni bir migration dosyası oluşturur.
     */


    /**
     * php artisan migrate
     * bu komut sayesinde migrate dosyaları oluşturulur ve db üzerinde işlem yapılır.
     */

    /**
     * php artisan migrate:fresh
     * !!!bu komutu kullanmak çok tehlikelidir!!!
     * bu komut, db üzerinde yeni tablo eklemeyi sağlar fakat
     * db üzerindeki bütün dataları siler.
     */

    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            /**
             * Constrained olarak işaret edilen tablonun migration dosyası,
             * bu migration sayfasından daha önce migrate edilmesi gerekli bu yüzden dosyaların isimlerini değişterek,
             * constrained dosyayı daha yukarıya taşıyoruz.
             */
            $table->foreignId('category_id')->constrained('categories');
            $table->string('title');
            $table->string('body');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
