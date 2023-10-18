<?php

namespace App\Http\TA\Infrastructure\Repository;

use App\Http\TA\Domain\Models\User;
use App\Http\TA\Domain\Service\Repository\PesertaRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRepository implements PesertaRepositoryInterface
{
    public function persist(User $name)
    {
        $data = $this->createPayload($name);
        DB::table('Users')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $name): ?User
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(User $name)
    {
        return [
            'id' => $id_user->getId(),

        ];
    }
}
