<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/statics/js/functions.js"></script>
    <script src="/statics/js/message.js"></script>
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralList.css">
    <link rel="stylesheet" type="text/css" href="/statics/css/ListaProduto.css">
    <link rel="stylesheet" type="text/css" href="/statics/css/message.css">
    <title>Produtos</title>
</head>
<body onload="RemoveMessage();">
    <?php if(isset($_SESSION["message"])) :?>
    <div class="template-message-group">
        <div class="message <?= $_SESSION["message"]["type"] ?>">
            <p>
                <?= $_SESSION["message"]["txt"] ?>
            </p>    
        </div>                
    </div>
    <?php unset($_SESSION["message"]); ?>    
    <?php endif ?>        
    <form id="formDeleteRows" method="post" action="/produtos/delete">        
        <input type="hidden" id="DeleteRows" name="DeleteRows" value="">
    </form>
    <table>
        <thead>
            <tr>
                <th colspan=6>
                    <button type="button" onclick="getDeleteRows();">remover</button>
                    <a href="/produto/form"><button type="button">adicionar</button></a>
                </th>
            </tr>
            <tr>
                <th>
                <input type="checkbox" onchange="changeAllDeleteRows(this);">    
                </th>
                <th>fornecedor</th>
                <th>nome_produto</th>
                <th>valor_produto</th>
                <th>peso</th>
                <th>quantidade_estoque</th>
            </tr>            
        </thead>
        <tbody>
            <?php if(count($model->rows) > 0) :?>
            <?php foreach($model->rows as $item) :?>
            <tr>
                <td>
                <input type="checkbox" id="<?= $item->id_produto ?>" name="deleteRow">    
                </td>

                <!--
                <td>
                    <a href="/produto/delete?id_produto=<?= $item->id_produto ?>">X</a>
                </td>
                -->
                
                <td left><a href="/fornecedor/form?id_fornecedor=<?= $item->id_fornecedor ?>&next=produtos"><?= $item->nome_fantasia ?></a></td>
                <td left><a href="/produto/form?id_produto=<?= $item->id_produto ?>"><?= $item->nome_produto ?></a></td>
                <td><?= $item->valor_produto ?></td>
                <td><?= $item->peso ?></td>
                <td><?= $item->quantidade_estoque ?></td>
            </tr>    
            <?php endforeach ?>     
            <?php else :?>
            <tr>
                <td colspan=6 message>Nenhum produto cadastrado!</td>
            </tr>                        
            <?php endif ?>
        </tbody>
    </table>
    
</body>
</html>