# index.php

O arquivo responsável pela inicialização do nosso sistema. É a partir dele que o usuário terá acesso às funcionalidades que nós implementarmos.

# Banco.php

Classe abstrata responsável apenas pela configuração e instanciação do objeto de conexão ao banco de dados. Uma classe abstrata não pode ser instanciada. Desta forma, não podemos criar um objeto a partir da classe banco, como geralmente fazíamos:

```
$banco = new Banco();
```

Por utilizarmos a classe PDO para conexão ao banco de dados, a classe Banco servirá apenas para nos entregar um objeto da classe PDO instanciado através do método estático `getInstance()`. A partir de agora, sempre que precisarmos de uma conexão, faremos o seguinte:

```
$con = Banco::getInstance()
```

# AlunoDAO.php

Classe responsável pelo acesso a dados referentes à classe Aluno. O DAO representa Data Access Object, o mesmo que Objeto de Acesso a Dados.

Assim como a classe Aluno, toda classe que represente uma entidade do banco de dados, deverá ter uma classe DAO referente.

Observe que o método `listar()` é estático por não se referir a um comportamento específico de um único objeto. Quando falamos em 'listar alunos' falamos de listar vários alunos. 

# Aluno.php

Esta é a classe que representa a nossa principal entidade até o momento.

Percebam que agora todos os atributos da classe estão com acesso privado, como deve ser. Sempre que precisar acessar um atributo da classe, você deverá invocar o método 'getter' respectivo:

```
$cpf = $umAlunoQualquer->getCpf();
```

Caso precise modificar o valor de algum atributo, será necessário, a partir deste momento, declarar um método 'setter':

```
$umAlunoQualquer->setCpf("00011122233");
``` 

Lembre-se que o uso de acesso privado aos atributos protege o seu código de acessos inesperados.

# Observações

O antigo arquivo README.md foi renomeado para `Exemplos.md` e movido para o diretório `uso_futuro`.

O livro **PHP Programando com Orientação a Objetos** está disponível em nossa biblioteca.

A documentação oficial do PHP pode ser baixada aqui: http://php.net/download-docs.php. Eu utilizo esta versão: http://php.net/get/php_enhanced_pt_BR.chm/from/a/mirror.

Pra entender orientação a objeto de um jeito simples, eu recomendo: https://www.youtube.com/playlist?list=PLHz_AreHm4dmGuLII3tsvryMMD7VgcT7x.

# Bibliografia

MATHEUS, Diogo. **Trabalhando com PDO no PHP**. Disponível em <http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/>.
DALL'OGLIO, Pablo. **PHP Programando com Orientação a Objetos - 3ª Edição**. Novatec.
**Manual do PHP**. Disponível em <https://secure.php.net/manual/pt_BR/>.
LOCKHART, Josh. **PHP: Do Jeito Certo**. Disponível em <http://br.phptherightway.com/>.