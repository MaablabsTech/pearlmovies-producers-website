<?php



namespace Database\Seeders;



use App\Models\Setting;

use Illuminate\Database\Seeder;



class SettingSeeder extends Seeder

{

    public function run()

    {

        Setting::create([
            'application_status' => 1,
            'system_name' => "MTL-PearlMovies partners website",
            'home_page_style' => "non-slider",
            'home_background' => "default",
            'enable_public_comments' => 1,
            'enable_user_signup' => 1,
            'enable_user_login' => 1,
            'enable_partner_section' => 1,
            'recently_added_heading' => "Recently added productions",
            'enable_recently_added' => 1,
            'now_watching_heading' => "Now watching",
            'enable_now_watching' => 1,
            'header_logo' => "default",
            'footer_logo' => "default",
            'facebook_url' => "facebook.com",
            'instagram_url' => "instagram.com",
            'twitter_url' => "twitter.com",
            'telegram_url' => "telegram.com",
            'playstore_url' => "playstore.com",
            'appstore_url' => "appstore.com",
            'footer_text' => "Powered by Maablabs Technologies Ltd & distributed under Pearl Movies",
            'enable_user_rating' => 1,
            'system_email' => "info@maablabstech.com",
            'system_phone_number' => "25600000000",
            'system_phone_number_alt' => "25600000000"
        ]);

    }

}

