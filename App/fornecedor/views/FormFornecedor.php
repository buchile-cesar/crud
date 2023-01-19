<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/statics/js/masks.js"></script>
    <link rel="stylesheet" type="text/css" href="/statics/css/FormFornecedor.css">
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralForm.css">
    <title>Fornecedor</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Fornecedor</legend>
        <form method="POST" action="/fornecedor/form/save">
           
            <?php if(isset($_GET["next"])) :?>
            <input type="hidden" value="<?= $_GET["next"] ?>" name="next">
            <?php endif ?>                
        
            <input type="hidden" value="<?= $model->id_fornecedor ?>" name="id_fornecedor">
            <label for="cnpj">CNPJ do fornecedor</label>
            <input id="cnpj" name="cnpj" value="<?= $model->cnpj ?>" type="text" onkeyup="maskCNPJ(this);" maxlength="20">
            <label for="razao_social">Razão social</label>
            <input id="razao_social" name="razao_social" value="<?= $model->razao_social ?>" type="text" onkeyup="maskNameUpper(this);" maxlength="255">
            <label for="nome_fantasia">Nome fantasia</label>
            <input id="nome_fantasia" name="nome_fantasia" value="<?= $model->nome_fantasia ?>" type="text" onkeyup="maskNameUpper(this);" maxlength="255">
            <label for="telefone">Telefone do fornecedor</label>
            <input id="telefone" name="telefone" value="<?= $model->telefone ?>" type="text" onkeyup="maskCellPhone(this);" maxlength="20">
            <label for="nome_vendedor">Nome do vendedor</label>
            <input id="nome_vendedor" name="nome_vendedor" value="<?= $model->nome_vendedor ?>" type="text" onkeyup="maskName(this);" maxlength="255">
            <label for="email_vendedor">E-mail do vendedor</label>
            <input id="email_vendedor" name="email_vendedor" value="<?= $model->email_vendedor ?>" type="text" onkeyup="maskEmail(this);" maxlength="255">
            <label for="celular_vendedor">Celular do vendedor</label>
            <input id="celular_vendedor" name="celular_vendedor" value="<?= $model->celular_vendedor ?>" type="text" onkeyup="maskCellPhone(this);" maxlength="20">
            <div buttons>
                <a href="<?= isset($_GET["next"]) ? "/".$_GET["next"] : "/fornecedores"; ?>"><button type="button">voltar</button></a>
                <button type="submit">salvar</button>                
            </div>
        </form>
    </fieldset>
</body>
</html>