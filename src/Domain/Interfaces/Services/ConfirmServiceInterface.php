<?php

namespace ZnUser\Confirm\Domain\Interfaces\Services;

use ZnUser\Confirm\Domain\Entities\ConfirmEntity;
use ZnDomain\Entity\Exceptions\AlreadyExistsException;
use ZnDomain\Service\Interfaces\CrudServiceInterface;

interface ConfirmServiceInterface extends CrudServiceInterface
{

    /**
     * @param ConfirmEntity $confirmEntity
     * @throws AlreadyExistsException
     */
    public function add(ConfirmEntity $confirmEntity);
}

