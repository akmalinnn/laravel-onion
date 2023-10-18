<?php

namespace App\Http\TA\Domain\Service\Repository;

use App\Http\TA\Domain\Models\Peserta;

interface TopikRepositoryInterface
{
    public function persist(User $user);
    public function getById(int $user_id): ?User;

}
