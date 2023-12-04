from flask import Flask, jsonfy
import json

app = Flask(__name__)

# Função para carregar os clientes do arquivo JSON
def carregar_clientes():
    try:
        with open('clientes.json', 'r') as arquivo:
            return json.load(arquivo)
    except FileNotFoundError:
        # Se o arquivo não existir, inicizliza uma lista vazia
        return []

# Rota para obter todos os clientes
@app.route('/api/clientes', methods=['GET'])
def obter_clientes():
    # Carrega os clientes existentes
    clientes = carregar_clientes()
    return jsonify({'clientes': clientes})

# Rota para obter um cliente por ID
@app.route('/api/clientes/<int:usuario_id>', methods=['GET'])
def obter_cliente(cliente_id):
    # Carrega os clientes existentes
    clientes = carregar_clientes()

    # Procura o cliente com o ID especificado
    cliente = next((client for client in clientes if client["id"] == cliente_id), None)
    if cliente:
        return jsonify({"cliente": cliente})
    else:
        return jsonify({"mensagem": "Cliente não encontrado"}), 404

if __name__ == '__main__':
    app.run(debug=True)