<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/statics/js/masks.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralForm.css">
    <title>Produto</title>
</head>
<body>
    <fieldset class="shadow px-5 py-5 rounded-4">
        <legend class="mb-3">Cadastro de Produtos</legend>
        <form method="POST" action="/produto/form/save">            
            <div class="form-group">    
                <input class="form-control" type="hidden" value="<?= $model->id_produto ?>" name="id_produto">
            </div>            
            <div class="form-group">
                <label for="id_fornecedor">Fornecedor</label>
                <select class="form-select" id="id_fornecedor" name="id_fornecedor">
                <?php foreach($model->fornecedores as $item) :?>
                    <?php if($item->id_fornecedor == $model->id_fornecedor):?>
                    <option value="<?= $item->id_fornecedor?>" selected><?= $item->nome_fantasia ?></option>
                    <?php else :?>
                    <option value="<?= $item->id_fornecedor?>"><?= $item->nome_fantasia ?></option>
                    <?php endif ?>
                <?php endforeach ?>    
                </select>                
            </div>
            <div class="form-group mt-2">            
                <label for="nome_produto">Produto</label>
                <input class="form-control" id="nome_produto" name="nome_produto" value="<?= $model->nome_produto ?>" type="text" onkeyup="maskName(this);">
            </div>
            <div class="form-group mt-2">
                <label for="valor_produto">Valor (em R$)</label>
                <input class="form-control" id="valor_produto" name="valor_produto" value="<?= $model->valor_produto ?>" type="text" onkeyup="maskDecimal(this);">
            </div>
            <div class="form-group mt-2">
                <label for="peso">Peso (em gramas)</label>
                <input class="form-control" id="peso" name="peso" value="<?= $model->peso ?>" type="text" onkeyup="maskDecimal(this);">
            </div>
            <div class="form-group mt-2">
                <label for="quantidade_estoque">Qtd. no estoque</label>
                <input class="form-control" id="quantidade_estoque" name="quantidade_estoque" value="<?= $model->quantidade_estoque ?>" type="text" onkeyup="maskPositiveInteger(this);">
            </div>
            <div class="btn-group mt-4" role="group">
                <a class="btn btn-dark me-1" href="<?= isset($_GET["next"]) ? "/".$_GET["next"] : "/produtos"; ?>">voltar</a>
                <button type="submit" class="btn btn-primary">salvar</button>                
            </div>            
        </form>
    </fieldset>
</body>
</html>