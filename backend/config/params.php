<?php
return [
    'adminEmail' => 'admin@example.com',
    'admin_menu' => [
        [
            'title' => '用户管理',
            'icon' => 'fa-user',
            'role' => \common\models\User::ROLE_OFFICER,
            'sub_menu' => [
                [
                    'title' => '用户列表',
                    'link' => '/user/index',
                ],
            ]
        ],
    ],
];
