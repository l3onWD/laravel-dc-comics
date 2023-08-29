<?php
return [
    [
        'text' => 'Home',
        'route' => 'home',
        'domain' => 'home*'
    ],
    [
        'text' => 'Comics',
        'route' => 'comics.index',
        'domain' => 'comics*'
    ],
    [
        'text' => 'Movies',
        'route' => '#',
        'domain' => '#'
    ],
    [
        'text' => 'Tv',
        'route' => '#',
        'domain' => '#'
    ],
    [
        'text' => 'Games',
        'route' => '#',
        'domain' => '#'
    ],
    [
        'text' => 'Collectibles',
        'route' => '#',
        'domain' => '#'
    ],
    [
        'text' => 'Videos',
        'route' => '#',
        'domain' => '#'
    ],
    [
        'text' => 'Shop',
        'route' => '#',
        'domain' => '#',
        'submenu' => [
            [
                'text' => 'Sub 01',
                'route' => '#',
                'domain' => '#'
            ],
            [
                'text' => 'Sub 02',
                'route' => '#',
                'domain' => '#'
            ],
            [
                'text' => 'Sub 03',
                'route' => '#',
                'domain' => '#'
            ]
        ]
    ]

];
