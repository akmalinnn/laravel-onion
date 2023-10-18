<?php

namespace App\Http\TA\Application\Service\TambahPeserta;

use App\Http\TA\Domain\Models\Peserta;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;

class CreateTopikService
{
    public function __construct(
        private PesertaRepositoryInterface $user_repository
    )
    {
    }

    public function execute(TambahPesertaRequest $request){
        $user = new User(
            null,
            $request->getName(),
            $request->getEmail(),
        );

        $this->topik_repository->persist($user);
    }
}
