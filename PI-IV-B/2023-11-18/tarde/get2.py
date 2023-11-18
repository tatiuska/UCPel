import requests

# URL da rota GET para obter todos os usuários
url_get_all = 'http://127.0.0.1:5000/api/usuarios'

# URL da rota GET para obter um usuário específico (substitua <id> pelo ID desejado)
url_get_one = 'http://127.0.0.1:5000/api/usuarios/<id>'

# Faz uma requisição GET para a URL para obter todos os usuários
response_all = requests.get(url_get_all)

# Exibe o código de status da resposta para obter todos os usuários
print(response_all.status_code)

# Exibe a resposta JSON retornada pelo servidor para obter todos os usuários
print(response_all.json())

# Faz uma requisição GET para a URL para obter um usuário específico (substitua <id> pelo ID desejado)
response_one = requests.get(url_get_one)

# Exibe o código de status da resposta para obter um usuário específico
print(response_one.status_code)

# Exibe a resposta JSON retornada pelo servidor para obter um usuário específico
print(response_one.json())
