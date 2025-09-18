<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Fornecedor;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FornecedorTest extends TestCase
{
    public function test_criar_fornecedor_sucesso()
    {
        $response = $this->postJson('/api/fornecedores', [
            'nome' => 'Empresa X',
            'cnpj' => '12345678000195',
            'email' => 'contato@empresa.com'
        ]);

        $response->assertStatus(201)
                ->assertJsonStructure(['data' => ['id', 'nome', 'cnpj']]);
    }

    public function test_criar_fornecedor_falha_validacao()
    {
        $response = $this->postJson('/api/fornecedores', [
            'nome' => '',
            'cnpj' => '123',
        ]);

        $response->assertStatus(422)
                ->assertJsonValidationErrors(['nome', 'cnpj']);
    }

    public function test_listar_com_filtro()
    {
        Fornecedor::factory()->create(['nome' => 'Empresa Teste']);

        $response = $this->getJson('/api/fornecedores?nome=Teste');

        $response->assertStatus(200)
                ->assertJsonFragment(['nome' => 'Empresa Teste']);
    }

}
