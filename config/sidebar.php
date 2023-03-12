<?php

return [
        'items' => [
            [
                'name' => 'Tableau de bord' ,
                'icon' => 'nav-icon fas fa-tachometer-alt' ,
                'permission' => '',
                'link' => 'home',
            ],
            [
                'name' => 'Utilisateurs' ,
                'icon' => 'nav-icon fas fa-users' ,
                'permission' => '',
                'link' => '',
                'children' => [
                    [
                        'name' => 'Gestion des utilisateurs' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => '',
                    ],
                    [
                        'name' => 'Gestion des roles' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => '',
                    ],
                    [
                        'name' => 'Gestion des permissions' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => '',
                    ],
                ] 
            ],
            [
                'name' => 'Mes clients' ,
                'icon' => 'nav-icon fas fa-users' ,
                'permission' => '',
                'link' => '',
            ],
            [
                'name' => 'Pourcentage' ,
                'icon' => 'fas fa-percent nav-icon' ,
                'permission' => '',
                'link' => '',
            ],
            [
                'name' => 'Flexy' ,
                'icon' => 'nav-icon fas fa-solid fa-phone-volume' ,
                'permission' => '',
                'link' => '',
                'children' => [
                        [
                            'name' => 'Flexy detail' ,
                            'icon' => 'far fa-circle nav-icon' ,
                            'permission' => '',
                            'link' => '',
                        ],
                        [
                            'name' => 'Flexy gros' ,
                            'icon' => 'far fa-circle nav-icon' ,
                            'permission' => '',
                            'link' => '',
                        ],
                ]
            ],
            [
                'name' => 'Cantact (client final)' ,
                'icon' => 'nav-icon fas fa-users' ,
                'permission' => '',
                'link' => '',
            ],
            [
                'name' => 'Recharge / Versement ' ,
                'icon' => 'nav-icon fas fa-regular fa-money-bill' ,
                'permission' => '',
                'link' => '',
            ],
            [
                'name' => 'Paramètres' ,
                'icon' => 'nav-icon fas  fa-cog' ,
                'permission' => '',
                'link' => '',
                'children' => [
                    [
                        'name' => 'Paramètres généraux' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => '',
                    ],
                ] 
            ],
        ]
];