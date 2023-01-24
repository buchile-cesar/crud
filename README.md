# CRUD
CRUD é um _App Web_ nas linguagens _PHP, HTML, CSS, JavaScript e SQL_ que explora, como questão principal, as ações de _CRUD (Create, Read, Update, Delete)_ em um banco de dados _MySQL_.

Sua arquiterura segue o padrão _MVC (Model, View, Controller)_ e é composto por dois módulos: _fornecedor_ e _produto_.

O módulo _fornecedor_ realiza as ações de _CRUD_ em uma tabela no banco de dados _bd\_crud_ denominada por _fornecedor_ que contém os campos:
* id_fornecedor: chave primária, autoincrementada e não nulo do tipo INT.
* nome_vendedor: não nulo do tipo VARCHAR(255).
* email_vendedor: não nulo do tipo VARCHAR(255).
* cnpj: não nulo e único do tipo VARCHAR(20).
* razao_social: não nulo do tipo VARCHAR(255).
* nome_fantasia: não nulo do tipo VARCHAR(255).
* telefone: não nulo do tipo VARCHAR(20).
* celular_vendedor: não nulo do tipo VARCHAR(20).

O módulo _produto_ realiza as ações de _CRUD_ em uma tabela no banco de dados _bd\_crud_ denominada por _produto_ que contém os campos:
* id_produto: chave primária, autoincrementada e não nulo do tipo INT.
* id_fornecedor: chave estrangeira de _fornecedor.id_fornecedor_, não nulo e do tipo INT.
* nome_produto: não nulo do tipo VARCHAR(255).
* valor_produto: não nulo do tipo DOUBLE.
* peso: não nulo do tipo DOUBLE.
* quantidade_estoque: não nulo do tipo INT.

Essa arquitera pode ser visualizada seguindo os seguintes passos no _MySQL Workbench_:
1. File -> Open Model
2. Na janela de seleção de arquivos, selecionar o arquivo _database_modeling.mwb_ constante no diretório _BD_

Para baixar esse sistema, basta dar o comando `git clone https://github.com/buchile-cesar/crud.git`.

## Criação do banco de dados
1. Acesse o terminal _Windows_ e navegue até o diretório de instalação do _MySQL_ em seu computador e acesse dentro dela o diretório _MySQL Server 8.0/bin_. 
2. Dê o comando `mysql -u root -p` para acessar o _mysql_ (caso não possua uma senha basta omitir a opção `-p`).
3. Crie o banco de dados com o comando `create database db_crud`.
4. Selecione o banco criado para trabalho com o comando `use db_crud`.
5. Crie todas as tabelas e suas relações utilizando o comando `source <path>`, com `<path>` sendo o caminho absoluto para o arquivo `BD/db_crud_estrutura.sql`.
6. Caso deseje popular as tabelas com alguns dados de exemplo, pode dar ainda o comando `source <path>` com `<path>` sendo  o caminho absoluto para o arquivo `BD/db_crud_dados.sql`.
7. Os passos 5. e 6. podem ser feitos de uma só vez utilizando o arquivo `BD/db_crud.sql`.

### Configurações do banco de dados
* Todas as configurações do banco de dados são realizadas no arquivo `BD/config.json`. Configure as variáveis contidas nesse arquivo de acordo com o seu banco de dados. 
  * `"dsn": "mysql:host=<seu host mysql>:<sua porta mysql>;dbname=db_crud"`.
  * `"user": "<seu usuário mysql>"`.
  * `"pwd": "<sua senha mysql>"`.
  
## Esquema de diretórios e arquivos
```
├───App -> diretório do aplicativo
│   │   index.php -> responsável pelas rotas do servidor
│   │
│   ├───fornecedor -> módulo que realiza o CRUD na tabela _fornecedor_
│   │   ├───controllers -> diretório de _controllers_
│   │   │       FornecedorController.php -> controller do módulo _fornecedor_
│   │   │
│   │   ├───models -> diretório de _models_
│   │   │       FornecedorDAO.php -> arquivo que realiza as consultas na tabela _fornecedor_
│   │   │       FornecedorModel.php -> arquivo de model
│   │   │
│   │   └───views -> diretório de _views_
│   │           FormFornecedor.php -> formulário para _create_ e _update_
│   │           ListaFornecedor.php -> tabela para _read_ e _delete_
│   │
│   ├───home -> página inicial
│   │   ├───controllers -> diretório de _controllers_ (vazio)
│   │   ├───models -> diretório de _models_ (vazio)
│   │   └───views -> diretório de _views_
│   │           Home.php -> home do sistema, onde há a possibilidade de ir para os módulos _fornecedor_ e _produtos_
│   │
│   ├───produto -> módulo que realiza o CRUD na tabela _produto_
│   │   ├───controllers -> diretório de _controllers_
│   │   │       ProdutoController.php -> controller do módulo _produto_
│   │   │
│   │   ├───models -> diretório de _models_
│   │   │       ProdutoDAO.php -> arquivo que realiza as consultas na tabela _produto_
│   │   │       ProdutoModel.php -> arquivo de model
│   │   │
│   │   └───views -> diretório de _views_
│   │           FormProduto.php -> formulário para _create_ e _update_
│   │           ListaProduto.php -> tabela para _read_ e _delete_
│   │
│   └───statics -> diretório de arquivos estáticos
│       ├───css -> diretório de arquivos CSS
│       │       GeneralForm.css -> estilização dos formulários
│       │       GeneralList.css -> estilização das tabelas de _read_ e _delete_
│       │       Home.css -> estilização da página inicial
│       │       message.css -> estilização para mensagens (quando se tenta inserir um produto sem nenhum fornecedor cadastrado, por exemplo)
│       │
│       └───js -> diretório de arquivos JavaScript
│               functions.js -> funções gerais
│               masks.js -> máscaras de campos
│               message.js -> interação com mensagens
│
└───BD -> diretório relacionado com o banco de dados
        config.json -> configurações do banco de dados
        database_modeling.mwb -> modelo do banco de dados
        db_crud.sql -> exportação da estrutura e dos dados do banco _bd_crud_
        db_crud_dados.sql -> exportação dos dados do banco _bd_crud_
        db_crud_estrutura.sql -> exportação da estrutura do banco _bd_crud_
```

## Colocando o servidor para funcionar
1. Dentro do diretório _App_ digite o comando `php -S localhost:8000 index.php`.
2. Se todas as configurações do banco de dados estiveram corretas, o servidor será inicializado.

## Utilização
* Para acessar os módulos _fornecedor_ ou _produto_ acesse a página `http:/localhost:8000/` e clique em `lista de fornecedores` ou `lista de produtos`, respectivamente.
* Clique em `adicionar` para incluir um novo fornecedor ou produto (ação _create_ do _CRUD_).
* A tabela na página já mostra os registros existentes (ação _read_ do _CRUD_).
* Para ver mais detalhes e inclusive atualizar dados (ação _update_ do _CRUD_), basta clicar nos links do campo _nome\_fantasia_ (para um fornecedor) ou _nome\_produto_ (para um produto). Para as alterações serem salvas, é necessário clicar em `salvar`.
* Para remover um ou mais registros (ação _delete_ do _CRUD_), basta selecionar a linha por meio do campo `checkbox` e em seguida clicar em `remover`. Nenhuma confirmação será solicitada.

## Observações
* A parte de _UX_ não foi o foco desse projeto e sim a sua funcionalidade. Desse modo, não houve grandes preocupações com a aparência do sistema.
* O sistema carece de uma validação dos dados inseridos via formulário, funcionalidade que deve ser implementada em modo de produção.
* Recomenda-se utilizar um _CAPTCHA_ nos formulários caso seja utilizado em modo de produção.
* Para uma melhor segurança dos dados, principalmente devido à LGPD, um módulo de autenticação de usuário deve ser implementado e apenas usuários autenticados terem acesso aos módulos _fornecedor_ e _produto_.

## Autores
| [<img src="https://avatars.githubusercontent.com/u/94256512?v=4" width=115><br><sub>César Buchile</sub>](https://github.com/buchile-cesar) |  
| :---: |





  

