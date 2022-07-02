<?php

namespace ZnUser\Confirm\Domain\Interfaces\Repositories;

use ZnUser\Confirm\Domain\Entities\ConfirmEntity;
use ZnCore\Domain\Repository\Interfaces\CrudRepositoryInterface;

interface ConfirmRepositoryInterface extends CrudRepositoryInterface
{

    public function deleteExpired();

    public function findOneByUniqueAttributes(string $login, string $action): ConfirmEntity;
}

