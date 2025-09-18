<?php

namespace App\Http\Controllers;


use App\Http\Requests\FornecedorRequest;
use App\Http\Resources\FornecedorResource;
use App\Services\FornecedorService;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    protected FornecedorService $service;

    public function __construct(FornecedorService $service)
    {
        $this->service = $service;
    }

    public function store(FornecedorRequest $request)
    {
        $fornecedor = $this->service->create($request->validated());
        return new FornecedorResource($fornecedor);
    }

    public function index(Request $request)
    {
        $fornecedores = $this->service->search($request->query('q', ''));
        return FornecedorResource::collection($fornecedores);
    }
}
