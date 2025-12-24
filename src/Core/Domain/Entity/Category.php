<?php

namespace Core\Domain\Entity;

use Core\Domain\Entity\Traits\MethodsMagicsTrait;
use Core\Domain\Exception\EntityValidationException;

class Category
{
    use MethodsMagicsTrait;

    /**
     * @throws EntityValidationException
     */
    public function __construct(
        protected string $id = '',
        protected string $name = '',
        protected string $description = '',
        protected bool $isActive = true)
    {
        $this->validate();
    }
    public function activate(): void
    {
        $this->isActive = true;
    }
    public function desable(): void
    {
        $this->isActive = false;
    }

    public function update(string $name, string $description = ''): void
    {
        $this->name = $name;
        $this->description = $description;

        $this->validate();
    }

    /**
     * @throws EntityValidationException
     */
    public function validate(): void
    {
        // NAME
        if (trim($this->name) === '') {
            throw new EntityValidationException("nome invalido");
        }

        if (strlen($this->name) < 3 || strlen($this->name) > 255) {
            throw new EntityValidationException("nome invalido");
        }

        // DESCRIPTION (opcional, mas valida tamanho)
        if ($this->description !== '' && strlen($this->description) > 255) {
            throw new EntityValidationException("Descrição invalida");
        }
    }



}