<?php

namespace App\Service;

use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class TypeService
{
    private $typeRepository;

    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function getById(int $id): array
    {
        $result = $this->typeRepository->find($id);
        return $result;
    }

    public function createType(Request $request): array
    {
        $attr = $request->all();
        $result = $this->typeRepository->create($attr);
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
