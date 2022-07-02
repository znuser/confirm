<?php

return [
    'definitions' => [
        
    ],
    'singletons' => [
        'ZnUser\Confirm\Domain\Interfaces\Services\ConfirmServiceInterface' => 'ZnUser\Confirm\Domain\Services\ConfirmService',
        'ZnUser\Confirm\Domain\Interfaces\Repositories\ConfirmRepositoryInterface' => 'ZnUser\Confirm\Domain\Repositories\Eloquent\ConfirmRepository',
    ],
    'entities' => [
        'ZnUser\Confirm\Domain\Entities\ConfirmEntity' => 'ZnUser\Confirm\Domain\Interfaces\Repositories\ConfirmRepositoryInterface',
    ],
];