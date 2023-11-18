// Criando uma array de objetos
const objs = [
    {
        nome:'Adalgisa',
        idade: 30,
        esta_trabalhando: true,
        detalhes_profissao: {
            profissão: 'Programadora',
            empresa: 'empresa X'
        },
        hobbies: ['programar', 'ler', 'correr']
    },
    {
        nome:'Gregório',
        idade: 42,
        esta_trabalhando: false,
        detalhes_profissao: {
            profissao: 'Advogado',
            empresa: null
        },
        hobbies: ['nadar', 'caminhar', 'cinema']
    }
]

//Imprimindo a array de objetos - linhas 1 a 22
console.log(objs)

//JSON - convertendo o objeto para JSON - contexto de mandar dados para uma API - POST
const jsonData = JSON.stringify(objs)

console.log(jsonData)

console.log(typeof jsonData) //vai retornar que é uma string

//convertendo JSON para objeto - pensando num caso de consumir dados de uma API - GET
const objData = JSON.parse(jsonData)

console.log(objData)

console.log(typeof objData) //irá retornar que é um objeto

//usando a função map para imprimir o nome dos cadastrados
objData.map((pessoa) => {
    console.log(pessoa.nome)
})
