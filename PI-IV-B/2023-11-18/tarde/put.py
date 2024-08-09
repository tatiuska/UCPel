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


# Rota para atualizar informações de um usuário por ID (método PUT)
@app.route('/api/usuarios', methods=['PUT'])
def atualizar_usuario(usuario_id):
    # Obtém os dados atualizados do usuário a partir do corpo da requisição JSON
    dados_atualizados = request.get_json()

    # Carrega os usuários existentes
    usuario = carregar_usuarios()

    # Procura o usuário com o ID especificado
    usuario_para_atualizar = next((user for user in usuarios if user["id"] == usuario_id), None)

    if usuario_para_atualizar:
        # Atualiza as informações do usuário com os novos dados
        usuario_para_atualizar.update(dados_atualizados)

        # Salva os usuários de volta no arquivo JSON
        salvar_usuarios(usuario)

        return jsonify({"mensagem": "Usuário atualizado com sucesso", "usuario": usuario_para_atualizar}), 200
    else:
        return jsonify({"mensagem": "Usuário não encontrado"}), 404


if __name__ == '__main__':
    app.run(debug=True)