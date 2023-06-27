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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('application_status');
            $table->string('system_name');
            $table->string('home_page_style', 255);
            $table->string('theme', 255)->nullable();
            $table->string('home_background');
            $table->integer('enable_public_comments');
            $table->integer('enable_user_signup');
            $table->integer('enable_user_login');
            $table->integer('enable_partner_section');
            $table->string('recently_added_heading');
            $table->integer('enable_recently_added');
            $table->string('now_watching_heading');
            $table->integer('enable_now_watching');
            $table->string('header_logo');
            $table->string('footer_logo');
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('telegram_url')->nullable();
            $table->string('playstore_url')->nullable();
            $table->string('appstore_url')->nullable();
            $table->string('footer_text');
            $table->integer('enable_user_rating');
            $table->string('system_email');
            $table->string('system_phone_number');
            $table->string('system_phone_number_alt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
