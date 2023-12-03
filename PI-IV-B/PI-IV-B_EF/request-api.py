import requests

# URL da rota POST para adicionar um novo cliente
url = 'http://127.0.0.1:5000/api/clientes'

# Dados do novo cliente para enviar ao corpo da requisição JSON
data = {"nome": "NovoCliente", "idade": 25, "cpf": "123.456.789-00"}

# Faz uma requisição POST para a URL com os dados do novo cliente no corpo
response = requests.post(url, json=data)

# Exibe o código de status da resposta
print(response.status_code)

# Exibe a resposta JSON retornada pelo servidor
print(response.json())