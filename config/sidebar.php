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
                        'link' => 'users.index',
                    ],
                    [
                        'name' => 'Gestion des roles' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => 'roles.index',
                    ],
                    [
                        'name' => 'Gestion des permissions' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => 'permissions.index',
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
                'name' => 'Param??tres' ,
                'icon' => 'nav-icon fas  fa-cog' ,
                'permission' => '',
                'link' => '',
                'children' => [
                    [
                        'name' => 'Param??tres g??n??raux' ,
                        'icon' => 'far fa-circle nav-icon' ,
                        'permission' => '',
                        'link' => '',
                    ],
                ] 
            ],
        ]
];