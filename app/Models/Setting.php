<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'application_status',
        'system_name',
        'home_page_style',
        'theme',
        'home_background',
        'enable_public_comments',
        'enable_user_signup',
        'enable_user_login',
        'enable_partner_section',
        'recently_added_heading',
        'enable_recently_added',
        'now_watching_heading',
        'enable_now_watching',
        'header_logo',
        'footer_logo',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'telegram_url',
        'playstore_url',
        'appstore_url',
        'footer_text',
        'enable_user_rating',
        'system_email',
        'system_phone_number',
        'system_phone_number_alt',
    ];
}
