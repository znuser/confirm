<?php

namespace ZnUser\Confirm\Domain\Entities;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use ZnDomain\Entity\Interfaces\EntityIdInterface;
use Symfony\Component\Validator\Constraints as Assert;
use ZnDomain\Entity\Interfaces\UniqueInterface;
use ZnDomain\Validator\Interfaces\ValidationByMetadataInterface;
use DateTime;

class ConfirmEntity implements ValidationByMetadataInterface, EntityIdInterface, UniqueInterface
{

    private $id = null;

    private $login = null;

    private $action = null;

    private $code = null;

    private $isActivated = false;

    private $data = null;

    private $expire = null;

    private $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new DateTime;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('login', new Assert\NotBlank);
        $metadata->addPropertyConstraint('action', new Assert\NotBlank);
        $metadata->addPropertyConstraint('code', new Assert\NotBlank);
        $metadata->addPropertyConstraint('expire', new Assert\NotBlank);
        $metadata->addPropertyConstraint('createdAt', new Assert\NotBlank);
    }

    public function unique() : array
    {
        return [
            ['login', 'action']
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setLogin($value) : void
    {
        $this->login = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setAction($value) : void
    {
        $this->action = $value;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setCode($value) : void
    {
        $this->code = $value;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setIsActivated(bool $value) : void
    {
        $this->isActivated = $value;
    }

    public function getIsActivated(): bool
    {
        return $this->isActivated;
    }

    public function setData($value) : void
    {
        $this->data = $value;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setExpire($value) : void
    {
        $this->expire = $value;
    }

    public function getExpire()
    {
        return $this->expire;
    }

    public function setCreatedAt($value) : void
    {
        $this->createdAt = $value;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
