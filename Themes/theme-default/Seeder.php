<?php

use Versatile\Core\Seeders\AbstractBreadSeeder;

class Seeder extends AbstractBreadSeeder
{
    public function menu()
    {
        return [
            // Menu Site
            [
                'role' => 'primary',
                'title' => 'Home',
                'url' => '/home',
                'order' => 1,
            ],
            [
                'role' => 'primary',
                'title' => 'About',
                'url' => '/about',
                'order' => 2,
            ],
            [
                'role' => 'primary',
                'title' => 'Posts',
                'url' => '/posts',
                'order' => 3
            ],
            [
                'role' => 'primary',
                'title' => 'Contact',
                'url' => '/contact',
                'order' => 4,
            ],

            // Menu Social
            [
                'role' => 'social',
                'title' => 'Facebook',
                'url' => 'https://www.facebook.com/codions',
                'target' => '_blank',
                'icon_class' => 'fa-facebook-square',
                'order' => 1,
            ],
            [
                'role' => 'social',
                'title' => 'Twitter',
                'url' => 'https://twitter.com/codionstech',
                'target' => '_blank',
                'icon_class' => 'fa-twitter-square',
                'order' => 2,
            ],
            [
                'role' => 'social',
                'title' => 'Instagram',
                'url' => 'https://www.instagram.com/codionstech',
                'target' => '_blank',
                'icon_class' => 'fa-instagram',
                'order' => 3,
            ],
        ];
    }
}
