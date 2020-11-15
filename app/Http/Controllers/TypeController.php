<?php

namespace App\Http\Controllers;

use App\Service\TypeService;
use App\Http\Requests\TypeRequest;

class TypeController extends Controller
{
    private $typeService;

    public function __construct(TypeService $typeService)
    {
        $this->typeService = $typeService;
    }

    public function show(int $id)
    {
        $respounce = $this->typeService->getById($id);

        return response()->json($respounce);
    }

    public function create(TypeRequest $request)
    {
        $result = $this->typeService->createType($request);

        return response()->json($result);
    }
}
