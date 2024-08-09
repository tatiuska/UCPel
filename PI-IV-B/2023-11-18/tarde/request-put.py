import requests

# URL da rota PUT para editar um usuário
url = 'http://127.0.0.1:5000/api/usuarios'

# ID referente ao usuário que será atualizado
usuario_id = 4

# Dados atualizados do usuário
dados_atualizados = {
        "id": 4,
        "nome": "Eduarda Quintana",
        "idade": 22,
        "cpf": "876.543.987-00",}

# Realiza a requisição PUT
response = requests.put(url, json=dados_atualizados)

# Exibe a resposta da requisição
print(response.json)
