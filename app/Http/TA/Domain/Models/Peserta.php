

<?php

namespace App\Http\TA\Domain\Models;

use App\Http\TA\Domain\Enum\TambahPeserta;

class Topik
{
    public function __construct(
        private ?int $id,
        private TambahPeserta $name,
        private TambahPeserta $email,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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

