<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminDetail;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminDetail::create([
            'titles' => 'Musician,Music Educator,Composer',
            'email' => 'info@sambat.com.np',
            'bio' => '<p><strong>Sambat</strong> is a musician, composer and music educator based out of Nepal. His foray into music started very early, inspired and taught by his father to play a range of different instruments and write songs. He explores the idea of human condition, personal inward journeys and spirituality through a range of lyrical and musical expressions. Having played wide range of styles from rock, metal, jazz, fusion, funk, latin and folk, he has found his sound in the experimental idiom while continuing to explore and work with many genres and instruments. He has appeared in prestigious music festivals, most notably Giants of Jazz, Delhi(2017 &amp; 2018), International Jazz Day @TPMJC 2018.<br>Sambat graduated from Global Music Institute in 2018, affiliated to the prestigious Berklee College of Music. He has since founded <strong>Dharan School of Contemporary Music</strong> with the goal of helping out people expand their musical consciousness. His educational content on <a href="https://www.youtube.com/sambatshree"><strong>YouTube</strong></a> explores what music means, and what it means to be a musician.</p>',
            'address' => 'Dharan, Nepal 56700',
            'fbLink' => 'https://www.facebook.com/sambatshree/',
            'instaLink' => 'https://www.instagram.com/sambatshree/',
            'ytLink' => 'https://www.youtube.com/sambatshree',
            'contact1' => '+9779812354594',
            'contact2' => '+9779842141959'
        ]);
    }
}