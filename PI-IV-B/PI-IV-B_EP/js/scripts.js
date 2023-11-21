// Criando uma array de objetos
const objClientes = [
    {
        _comentario: 'Dados do cliente 1',
        cliente_id: 1,
        nome: 'Alberto Santos Dumont',
        endereco: {
            rua: 'Rua do Encanto, 22 - 2o. andar',
            cidade: 'Petrópolis - RJ'
        },
        cep: '25600-000',
        data_de_nascimento: '01-01-1990',
        telefone: '(11) 1234-5678'
    },
    {
        _comentario: 'Dados do cliente 2',
        cliente_id: 2,
        nome: 'Bruce Wayne',
        endereco: {
            rua: 'Rua das Sombras, 122',
            cidade: 'Gotham City - GC'
        },
        cep: '12345-678',
        data_de_nascimento: '27-02-1970',
        telefone: '(123) 456-7890'
    },
    {
        _comentario: 'Dados do cliente 3',
        cliente_id: 3,
        nome: 'Sherlock Holmes',
        endereco: {
            rua: 'Baker Street, 221B',
            cidade: 'Londres - Reino Unido'
        },
        cep: '25600-000',
        data_de_nascimento: '06-01-1854',
        telefone: '(123) 486-7790'
    },
    {
        _comentario: 'Dados do cliente 4',
        cliente_id: 4,
        nome: 'Hello Kitty',
        endereco: {
            rua: 'Rua das Cores, 133',
            cidade: 'Sanrioville - Sanrio'
        },
        cep: '54321-123',
        data_de_nascimento: '01-11-1974',
        telefone: '(53) 3333-0101'
    },
    {
        _comentario: 'Dados do cliente 5',
        cliente_id: 5,
        nome: 'Sonic Hedgehog',
        endereco: {
            rua: 'Green Hill Zone, 66',
            cidade: 'Mobius - Sony'
        },
        cep: '12000-678',
        data_de_nascimento: '23-06-1991',
        telefone: '(21) 9876-5432'
    }
]

// visualizando os dados dos clientes - imprimindo a array de objetos
console.log(objClientes)

// convertendo o objeto para JSON
const jsonClientes = JSON.stringify(objClientes)
console.log(jsonClientes)
console.log(typeof jsonClientes)

//usando a função map para imprimir o nome dos cadastrados
objClientes.map((cliente) => {
    console.log(cliente.nome)
})


