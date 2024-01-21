import requests

# URL da rota POST para adicionar um novo cliente
url = 'http://127.0.0.1:5000/api/clientes'

# Dados do novo cliente para enviar ao corpo da requisição JSON
data = {
        "_comentario": "Dados do cliente 6",
        "cliente_id": "6",
        "nome": "NovoCliente",
        "endereco": {
            "rua": "conego siqueira canabarro",
            "cidade": "Pelotas - RS"
            },
        "cep": "96030-280",
        "data_de_nascimento": "18-09-2003",
        "telefone": "(53)991220892",
        "id": 6
    }

# Faz uma requisição POST para a URL com os dados do novo cliente no corpo
response = requests.post(url, json=data)

# Exibe o código de status da resposta
print(response.status_code)

# Exibe a resposta JSON retornada pelo servidor
print(response.json())