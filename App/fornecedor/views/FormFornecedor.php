<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/statics/js/masks.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralForm.css">
    <title>Fornecedor</title>
</head>
<body>
    <fieldset class="shadow px-5 py-5 rounded-4">
        <legend class="mb-3">Cadastro de Fornecedor</legend>
        <form method="POST" action="/fornecedor/form/save">
            <div class="form-group">
                <?php if(isset($_GET["next"])) :?>
                <input type="hidden" value="<?= $_GET["next"] ?>" name="next">
                <?php endif ?>                
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $model->id_fornecedor ?>" name="id_fornecedor">
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ do fornecedor</label>
                <input class="form-control" id="cnpj" name="cnpj" value="<?= $model->cnpj ?>" type="text" onkeyup="maskCNPJ(this);" maxlength="20">
            </div>
            <div class="form-group mt-2">
                <label for="razao_social">Razão social</label>
                <input class="form-control" id="razao_social" name="razao_social" value="<?= $model->razao_social ?>" type="text" onkeyup="maskNameUpper(this);" maxlength="255">
            </div>
            <div class="form-group mt-2">
                <label for="nome_fantasia">Nome fantasia</label>
                <input class="form-control" id="nome_fantasia" name="nome_fantasia" value="<?= $model->nome_fantasia ?>" type="text" onkeyup="maskNameUpper(this);" maxlength="255">
            </div>        
            <div class="form-group mt-2">
                <label for="telefone">Telefone do fornecedor</label>
                <input class="form-control" id="telefone" name="telefone" value="<?= $model->telefone ?>" type="text" onkeyup="maskCellPhone(this);" maxlength="20">
            </div>
            <div class="form-group mt-2">
                <label for="nome_vendedor">Nome do vendedor</label>
                <input class="form-control" id="nome_vendedor" name="nome_vendedor" value="<?= $model->nome_vendedor ?>" type="text" onkeyup="maskName(this);" maxlength="255">
            </div>
            <div class="form-group mt-2">
                <label for="email_vendedor">E-mail do vendedor</label>
                <input class="form-control" id="email_vendedor" name="email_vendedor" value="<?= $model->email_vendedor ?>" type="text" onkeyup="maskEmail(this);" maxlength="255">
            </div>
            <div class="form-group mt-2">
                <label for="celular_vendedor">Celular do vendedor</label>
                <input class="form-control" id="celular_vendedor" name="celular_vendedor" value="<?= $model->celular_vendedor ?>" type="text" onkeyup="maskCellPhone(this);" maxlength="20">
            </div>        
            <div class="btn-group mt-4" role="group">
                <a class="btn btn-dark me-1" href="<?= isset($_GET["next"]) ? "/".$_GET["next"] : "/fornecedores"; ?>">voltar</a>
                <button class="btn btn-primary" type="submit">salvar</button>                
            </div>
        </form>
    </fieldset>
</body>
</html>