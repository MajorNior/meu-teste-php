<?php

class DataRequest {

    private $DadosClientes = [
        0 => [
            'id' => 0,
            'nome' => 'Mendel',
            'cpf' => '555.333.888-77',
            'endereco' => 'Rua Veiga',
            'telefone' => '(11) 98654-3333',
            'email' => 'm@multidadosti.com.br',
            'status' => 'Aprovado'
        ],
        1 => [
            'id' => 1,
            'nome' => 'IG',
            'cpf' => '333.555.777-88',
            'endereco' => 'Rua Lopez',
            'telefone' => '(11) 94002-8922',
            'email' => 'ig@multidadosti.com.br',
            'status' => 'Pendente'
        ],
        2 => [
            'id' => 2,
            'nome' => 'Arthur',
            'cpf' => '222.444.333-55',
            'endereco' => 'Rua Limoeiro',
            'telefone' => '(11) 92233-4444',
            'email' => 'arthur@multidadosti.com.br',
            'status' => 'Suspenso'
        ],
        3 => [
            'id' => 3,
            'nome' => 'Rosa',
            'cpf' => '111.777.222-33',
            'endereco' => 'Rua Rangel',
            'telefone' => '(11) 96685-2525',
            'email' => 'frosa@multidadosti.com.br',
            'status' => 'Bloqueado'
        ],
        4 => [
            'id' => 4,
            'nome' => 'Ant',
            'cpf' => '333.111.222-99',
            'endereco' => 'Rua Areias',
            'telefone' => '(11) 96868-5555',
            'email' => 'alves@multidadosti.com.br',
            'status' => 'Aprovado'
        ]
    ];

    private $DadosFornecedores = [
        0 => [
            'id' => 0,
            'nome' => 'Moisés',
            'cpf' => '111.111.111-11',
            'cidade' => 'São Paulo',
            'email' => 'm@gmail.com',
            'status' => 'Aprovado'
        ],
        1 => [
            'id' => 1,
            'nome' => 'Bras',
            'cpf' => '222.222.222-22',
            'cidade' => 'Rio de Janeiro',
            'email' => 'bras@gmail.com',
            'status' => 'Pendente'
        ],
        2 => [
            'id' => 2,
            'nome' => 'Peixoto',
            'cpf' => '333.333.333-33',
            'cidade' => 'Bahia',
            'email' => 'peixe@gmail.com',
            'status' => 'Suspenso'
        ],
        3 => [
            'id' => 3,
            'nome' => 'Humberto',
            'cpf' => '444.444.444-44',
            'cidade' => 'Santa Catarina',
            'email' => 'um@gmail.com',
            'status' => 'Bloqueado'
        ],
        4 => [
            'id' => 4,
            'nome' => 'Costa',
            'cpf' => '555.555.555-55',
            'cidade' => 'Rio Grande do Sul',
            'email' => 'costa@gmail.com',
            'status' => 'Aprovado'
        ]
    ];

    private $DadosUsuarios = [
        0 => [
            'id' => 0,
            'nome' => 'Souza',
            'cpf' => '777.777.777-77',
            'endereco' => 'Rua Agostinho',
            'telefone' => '(11) 92222-3333',
            'usuario' => 'souza',
            'status' => 'Aprovado'
        ],
        1 => [
            'id' => 1,
            'nome' => 'Luiz',
            'cpf' => '000.550.787-18',
            'endereco' => 'Rua Gonzaga',
            'telefone' => '(11) 91322-5922',
            'usuario' => 'luizm',
            'status' => 'Pendente'
        ],
        2 => [
            'id' => 2,
            'nome' => 'Henrique',
            'cpf' => '223.411.353-58',
            'endereco' => 'Rua Manu',
            'telefone' => '(11) 92113-8989',
            'usuario' => 'lhenrique',
            'status' => 'Suspenso'
        ],
        3 => [
            'id' => 3,
            'nome' => 'Astolfo',
            'cpf' => '113.765.282-22',
            'endereco' => 'Rua Rangel',
            'telefone' => '(11) 96685-0001',
            'usuario' => 'astff',
            'status' => 'Bloqueado'
        ],
        4 => [
            'id' => 4,
            'nome' => 'Gomes',
            'cpf' => '332.151.287-33',
            'endereco' => 'Rua Areias',
            'telefone' => '(11) 96161-1616',
            'usuario' => 'rgomes',
            'status' => 'Aprovado'
        ]
    ];

    /**
     * Função que retorna os dados dos clientes ou a quantidade de registros
     * @param string recebe 'c' ou vazio
     * @return array||String
     */
    public function dadosClientes($param = '') {
        if ($param === 'c') {
            return count($this->DadosClientes);
        } else {
            $clientes = $this->DadosClientes;

            // Adicionar o ID do cliente no array
            foreach ($clientes as $id => &$cliente) {
                $cliente['id'] = $id;
            }

            return $clientes;
        }
    }

    /**
     * Função que retorna os dados dos fornecedores ou a quantidade de registros
     * @param string recebe 'c' ou vazio
     * @return array||String
     */
    public function dadosFornecedores($param = '') {
        if ($param === 'c') {
            return count($this->DadosFornecedores);
        } else {
            $fornecedores = $this->DadosFornecedores;

            // Adicionar o ID do fornecedor no array
            foreach ($fornecedores as $id => &$fornecedor) {
                $fornecedor['id'] = $id;
            }

            return $fornecedores;
        }
    }

    /**
     * Função que retorna os dados dos usuários ou a quantidade de registros
     * @param string recebe 'c' ou vazio
     * @return array||String
     */
    public function dadosUsuarios($param = '') {
        if ($param === 'c') {
            return count($this->DadosUsuarios);
        } else {
            $usuarios = $this->DadosUsuarios;

            // Adicionar o ID do usuário no array
            foreach ($usuarios as $id => &$usuario) {
                $usuario['id'] = $id;
            }

            return $usuarios;
        }
    }
}

// Verifica se a requisição AJAX foi feita
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['array'])) {
    $array = $_POST['array'];
    $dataRequest = new DataRequest();

    if ($array === 'clientes') {
        $response = $dataRequest->dadosClientes();
    } elseif ($array === 'fornecedores') {
        $response = $dataRequest->dadosFornecedores();
    } elseif ($array === 'usuarios') {
        $response = $dataRequest->dadosUsuarios();
    } else {
        $response = [];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>
