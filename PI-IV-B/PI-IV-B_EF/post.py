from flask import Flask, jsonify, request
import json

app = Flask(__name__)

# Função para carregar os clientes do arquivo JSON
def carregar_clientes():
    try:
        with open('clientes.json', 'r') as arquivo:
            return json.load(arquivo)
    except FileNotFoundError:
        # Se o arquivo não existir, irá inicializar com uma lista vazia
        return []

# Função para salvar os clientes no arquivo JSON
def salvar_clientes(clientes):
    with open('clientes.json', 'w') as arquivo:
        json.dump(clientes, arquivo, indent=2)

# Rota para obter todos os clientes (método GET)
@app.route('/api/clientes', methods=['GET'])
def obter_clientes():
    # Carrega os clientes existentes
    clientes = carregar_clientes()
    return jsonify({"clientes": clientes})

# Rota para adicionar um novo cliente (método POST)
@app.route('/api/usuarios', methods=['POST'])
def adicionar_cliente():
    # Obtém os dados do novo cliente a partir do corpo da requisição JSON
    novo_cliente = request.get_json()

    # Verifica se o campo "nome" está presente
    if "nome" not in novo_cliente:
        return jsonify({"mensagem": "O nome do cliente é obrigatório"}), 400

    # Carrega os clientes existentes
    clientes = carregar_clientes()

    # Simulando a atribuição de um novo ID
    novo_cliente["id"] = len(clientes) + 1

    # Adiciona o novo cliente à lista
    clientes.append(novo_cliente)

    # Salva os clientes de volta no arquivo JSON
    salvar_clientes(clientes)

    # Retorna uma resposta JSON indicando sucesso e os detalhes do novo cliente
    return jsonify({"mensagem": "Cliente adicionado com sucesso", "cliente": novo_cliente}), 201

if __name__ == '__main__':
    app.run(debug=True)
# @app.route('/api/clientes', methods=['POST']): Define a rota para lidar com requisições POST para adicionar clientes.
# adicionar_cliente(): Lida com a requisição POST, obtendo dados do novo cliente, verificando se o campo "nome" está presente,
# atribuindo um novo ID, adicionando o novo cliente à lista e salvando os clientes de volta no arquivo JSON.
# jsonify({"mensagem": "Cliente adicionado com sucesso", "cliente": novo_cliente}), 201: Retorna uma resposta JSON indicando que
# o cliente foi adicionado com sucesso, juntamente com os detalhes do novo cliente.
# Abra o Postman.
# Selecione o método POST.
# Insira a URL: http://127.0.0.1:5000/api/clientes.
# No corpo da requisição, selecione "raw" e escolha "JSON (application/json)".
# Insira o JSON de exemplo:

# {
#     "nome": "NovoCliente",
#     "idade": 25,
#     "cpf": "123.456.789-00"
# }

# Clique em "Send" para enviar a requisição.