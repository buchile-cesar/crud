<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/statics/js/masks.js"></script>
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralForm.css">
    <title>Produto</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>
        <form method="POST" action="/produto/form/save">
            
            <input type="hidden" value="<?= $model->id_produto ?>" name="id_produto">
            
            <label for="id_fornecedor">Fornecedor</label>
            <select id="id_fornecedor" name="id_fornecedor">
            <?php foreach($model->fornecedores as $item) :?>
                <?php if($item->id_fornecedor == $model->id_fornecedor):?>
                <option value="<?= $item->id_fornecedor?>" selected><?= $item->nome_fantasia ?></option>
                <?php else :?>
                <option value="<?= $item->id_fornecedor?>"><?= $item->nome_fantasia ?></option>
                <?php endif ?>
            <?php endforeach ?>    
            </select>
            
            
            <label for="nome_produto">Produto</label>
            <input id="nome_produto" name="nome_produto" value="<?= $model->nome_produto ?>" type="text" onkeyup="maskName(this);">
            <label for="valor_produto">Valor (em R$)</label>
            <input id="valor_produto" name="valor_produto" value="<?= $model->valor_produto ?>" type="text" onkeyup="maskDecimal(this);">
            <label for="peso">Peso (em gramas)</label>
            <input id="peso" name="peso" value="<?= $model->peso ?>" type="text" onkeyup="maskDecimal(this);">
            <label for="quantidade_estoque">Qtd. no estoque</label>
            <input id="quantidade_estoque" name="quantidade_estoque" value="<?= $model->quantidade_estoque ?>" type="text" onkeyup="maskPositiveInteger(this);">
            <div buttons>
                <a href="<?= isset($_GET["next"]) ? "/".$_GET["next"] : "/produtos"; ?>"><button type="button">voltar</button></a>
                <button type="submit">salvar</button>                
            </div>            
        </form>
    </fieldset>
</body>
</html>