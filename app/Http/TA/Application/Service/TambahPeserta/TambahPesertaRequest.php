<?php

namespace App\Http\TA\Application\Service\TambahPeserta;

use App\Http\TA\Domain\Enum\TambahPeserta;

class CreateTopikRequest
{
    public function __construct(
        private string $name,
        private string $email,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
