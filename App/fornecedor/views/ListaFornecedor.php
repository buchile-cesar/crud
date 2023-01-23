<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="statics/js/functions.js"></script>
    <script src="/statics/js/message.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/statics/css/GeneralList.css">
    <link rel="stylesheet" type="text/css" href="/statics/css/message.css">
    <title>Fornecedores</title>
</head>
<body>
    <form id="formDeleteRows" method="post" action="/fornecedores/delete">        
        <input type="hidden" id="DeleteRows" name="DeleteRows" value="">
    </form> 

    <div class="container">
        <div class="row mb-2 justify-content-end">
            <div class="col-2" left>    
                <a href="/"><button class="btn btn-dark" type="button">home</button></a>
            </div>       
            <div class="col-6"></div>
            <div class="col-4" right>
                <button class="btn btn-danger" type="button" onclick="getDeleteRows();">remover</button>
                <a href="/fornecedor/form"><button class="btn btn-primary" type="button">adicionar</button></a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 table-responsive">   
                <table class="table table-hover shadow rounded-4">
                    <thead class="table-dark">                        
                        <tr>
                            <th>
                                <input type="checkbox" onchange="changeAllDeleteRows(this);">                     
                            </th>
                            <th>nome_fantasia</th>
                            <th>razão_social</th>
                            <th>cnpj</th>                
                            <!--
                            <th>telefone</th>                
                            <th>nome_vendedor</th>
                            <th>email_vendedor</th>
                            <th>celular_vendedor</th>
                            -->
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">    
                        <?php if(count($model->rows) > 0) :?>   
                        <?php foreach($model->rows as $item) :?>
                        <tr>                            
                            <th>
                            <input type="checkbox" id="<?= $item->id_fornecedor ?>" name="deleteRow">    
                            </th>

                            <!--
                            <td>
                                <a href="/fornecedor/delete?id_fornecedor=<?= $item->id_fornecedor ?>">X</a>
                            </td>
                            -->
                            <td left><a href="/fornecedor/form?id_fornecedor=<?= $item->id_fornecedor ?>"><?= $item->nome_fantasia ?></a></td>
                            <td left><?= $item->razao_social ?></td>
                                <td><?= $item->cnpj ?></td>
                                <!--
                                <td><?= $item->telefone ?></td>                
                                <td left><?= $item->nome_vendedor ?></td>
                                <td left><?= $item->email_vendedor ?></td>
                                <td><?= $item->celular_vendedor ?></td>  
                                -->         
                            </tr>    
                            <?php endforeach ?>
                            <?php else :?>
                            <tr>
                                <td colspan=4 message>Nenhum fornecedor cadastrado!</td>
                        </tr>                        
                        <?php endif ?>  
                    </tbody>       
                </table>       
            </div>
        </div>
    </div>   
    
                
                
        
</body>
</html>