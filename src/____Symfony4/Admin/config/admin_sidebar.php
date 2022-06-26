<?php

use ZnLib\Web\Html\Helpers\Url;
use ZnUser\Rbac\Domain\Enums\Rbac\ExtraPermissionEnum;

return [
    [
        'label' => 'Log history',
        'url' => Url::to(['/log/history']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],

    [
        'label' => 'Rpc',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'Client',
        'url' => Url::to(['/rpc-client/request']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],

    [
        'label' => 'RBAC',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'Info',
        'url' => Url::to(['/rbac/info']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
];
