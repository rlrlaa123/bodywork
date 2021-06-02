<?php

use Illuminate\Database\Seeder;

class HomeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new \App\HomeImage;

        $home->video = 'img/bodywork.mp4'

        $home->home1 = 'img/main1.jpg';
        $home->link1 = '/';
        $home->home2 = 'img/main2.jpg';
        $home->link2 = '/';
        $home->home3 = 'img/main3.jpg';
        $home->link3 = '/';

        $home->bf1 = 'img/bf.jpg';
        $home->bf2 = 'img/bf2.jpg';
        $home->bf3 = 'img/bf3.jpg';
        $home->bf4 = 'img/bf4.jpg';
        $home->bf5 = 'img/bf5.jpg';
        $home->bf6 = 'img/bf6.jpg';
        $home->bf7 = 'img/bf7.jpg';
        $home->bf8 = 'img/bf8.jpg';
        $home->bf9 = 'img/bf9.jpg';

        $home->menu1 = 'img/menu.png';
        $home->menu2 = 'img/menu.png';
        $home->menu3 = 'img/menu.png';
        $home->menu4 = 'img/menu.png';

        $home->save();
    }
}
