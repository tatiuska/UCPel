from flask import Flask, jsonify
import json

# Essas rotas seguem os princípios do REST ao utilizar os métodos HTTP de maneira semântica.

# Cria uma instância do aplicativo Flask
app = Flask(__name__)


# Função para carregar os usuários do arquivo JSON
def carregar_usuarios():
    try:
        with open('usuarios.json', 'r') as arquivo:
            return json.load(arquivo)
    except FileNotFoundError:
        # Se o arquivo não existir, inicializa com uma lista vazia
        return []


# Rota para obter todos os usuários
@app.route('/api/usuarios', methods=['GET'])
def obter_usuarios():
    # Carrega os usuários existentes
    usuarios = carregar_usuarios()
    return jsonify({"usuarios": usuarios})


# Rota para obter um usuário por ID
@app.route('/api/usuarios/<int:usuario_id>', methods=['GET'])
def obter_usuario(usuario_id):
    # Carrega os usuários existentes
    usuarios = carregar_usuarios()

    # Procura o usuário com o ID especificado
    usuario = next((user for user in usuarios if user["id"] == usuario_id), None)
    if usuario:
        return jsonify({"usuario": usuario})
    else:
        return jsonify({"mensagem": "Usuário não encontrado"}), 404


# Inicia o aplicativo Flask se este arquivo for executado diretamente
if __name__ == '__main__':
    app.run(debug=True)

# Exemplos de URLs para teste:
# http://127.0.0.1:5000/api/usuarios
# Obter um usuário específico (substitua <id> pelo ID desejado):
# http://127.0.0.1:5000/api/usuarios/1
