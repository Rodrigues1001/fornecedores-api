<?php

namespace App\Services;

use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorService
{
    public function create(array $data): Fornecedor
    {
        return DB::transaction(function () use ($data) {
            return Fornecedor::create($data);
        });
    }

    public function search(string $query)
    {
        return Fornecedor::where('nome', 'like', "%{$query}%")
                    ->orderByDesc('created_at')
                    ->limit(50)
                    ->get();
    }
}
