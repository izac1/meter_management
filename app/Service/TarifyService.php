<?php

namespace App\Service;

use App\Repositories\TarifyRepository;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class TarifyService
{
    private $tarifyRepository;
    private $typeRepository;

    public function __construct(TarifyRepository $tarifyRepository, TypeRepository $typeRepository)
    {
        $this->tarifyRepository = $tarifyRepository;
        $this->typeRepository = $typeRepository;
    }

    public function getById(int $id): array
    {
        $result = $this->tarifyRepository->find($id);
        return $result;
    }

    public function createTarif(Request $request): array
    {
        $attr = $request->all();
        $typeObject = $this->typeRepository->find($attr["type_id"]);
        $result = $this->tarifyRepository->create($attr["rate"], $typeObject);
        if ($result instanceof Model) {
            $result = $this->succes();
        }

        return $result;
    }

    private function succes(): array
    {
        return [
            "status" => "succes"
        ];
    }
}
