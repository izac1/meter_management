<?php

namespace App\Http\Controllers;

use App\Service\TarifyService;
use App\Http\Requests\TarifyRequest;

class TarifyController extends Controller
{
    private $tarifyService;

    public function __construct(TarifyService $tarifyService)
    {
        $this->tarifyService = $tarifyService;
    }

    public function show(int $id)
    {
        $respounce = $this->tarifyService->getById($id);

        return response()->json($respounce);
    }

    public function create(TarifyRequest $request)
    {
        $result = $this->tarifyService->createTarif($request);

        return response()->json($result);
    }
}
