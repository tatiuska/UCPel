import requests

# URL da rota GET para obter todos os clientes
url_get_all = 'http://127.0.0.1:5000/api/clientes'

# URL da rota GET para obter um cliente específico (substitua <id> pelo ID desejado)
#url_get_one = 'http://127.0.0.1:5000/app/clientes/3'

# Fazer uma requisição GET para a URL e obter todos os clientes
response_all = requests.get(url_get_all)

# Exibe o código de status da resposta para obter todos os clientes
print(response_all.status_code)

# Exibe a resposta JSON retornada pelo servidor para obter todos os clientes
print(response_all.json())

# Faz uma requisição GET para a URL para obter um cliente específico (substitua <id> pelo ID desejado - linha 7)
#response_one = requests.get(url_get_one)

# Exibe o código de status da resposta para obter um cliente específico
#print(response_one.status_code)

# Exibe a resposta JSON retornada pelo servidor para obter um cliente específico
# print(response_one.json())