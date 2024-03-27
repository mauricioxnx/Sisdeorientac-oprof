<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <style>
        body {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px grey;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Cadastro de Produtos</h1>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="" disabled selected>Selecione a categoria</option>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="roupas">Roupas</option>
                    <option value="acessorios">Acessórios</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>

</html>