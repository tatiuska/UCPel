from flask import Flask, jsonify, request
import json

app = Flask(__name__)

# Função para carregar os usuários do arquivo JSON
def carregar_usuarios():
    try:
        with open('usuarios.json', 'r') as arquivo:
            return json.load(arquivo)
    except FileNotFoundError:
        # Se o arquivo não existir, inicializa com uma lista vazia
        return []

# Função para salvar os usuários no arquivo JSON
def salvar_usuarios(usuarios):
    with open('usuarios.json', 'w') as arquivo:
        json.dump(usuarios, arquivo, indent=2)

# Rota para obter todos os usuários
@app.route('/api/usuarios', methods=['GET'])
def obter_usuarios():
    # Carrega os usuários existentes
    usuarios = carregar_usuarios()
    return jsonify({"usuarios": usuarios})

# Rota para adicionar um novo usuário (método POST)
@app.route('/api/usuarios', methods=['POST'])
def adicionar_usuario():
    # Obtém os dados do novo usuário a partir do corpo da requisição JSON
    novo_usuario = request.get_json()

    # Verifica se o campo "nome" está presente
    if "nome" not in novo_usuario:
        return jsonify({"mensagem": "O nome do usuário é obrigatório"}), 400

    # Carrega os usuários existentes
    usuarios = carregar_usuarios()

    # Simulando a atribuição de um novo ID
    novo_usuario["id"] = len(usuarios) + 1

    # Adiciona o novo usuário à lista
    usuarios.append(novo_usuario)

    # Salva os usuários de volta no arquivo JSON
    salvar_usuarios(usuarios)

    # Retorna uma resposta JSON indicando sucesso e os detalhes do novo usuário
    return jsonify({"mensagem": "Usuário adicionado com sucesso", "usuario": novo_usuario}), 201

if __name__ == '__main__':
    app.run(debug=True)
# @app.route('/api/usuarios', methods=['POST']): Define a rota para lidar com requisições POST para adicionar usuários.
# adicionar_usuario(): Lida com a requisição POST, obtendo dados do novo usuário, verificando se o campo "nome" está presente, atribuindo um novo ID, adicionando o novo usuário à lista e salvando os usuários de volta no arquivo JSON.
# jsonify({"mensagem": "Usuário adicionado com sucesso", "usuario": novo_usuario}), 201: Retorna uma resposta JSON indicando que o usuário foi adicionado com sucesso, juntamente com os detalhes do novo usuário.
# Abra o Postman.
# Selecione o método POST.
# Insira a URL: http://127.0.0.1:5000/api/usuarios.
# No corpo da requisição, selecione "raw" e escolha "JSON (application/json)".
# Insira o JSON de exemplo:

# {
#     "nome": "NovoUsuario",
#     "idade": 25,
#     "cpf": "123.456.789-00"
# }

# Clique em "Send" para enviar a requisição.
