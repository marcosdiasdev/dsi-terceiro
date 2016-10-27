# Variáveis e constantes

$nome = "Marcos";
$idade = 27;
$string = "a";

define("END", "127.0.0.1");
        
# Arrays

```
$dadosClientes = [
    ["Marcos", 25],
    ["Julio", 17],
    ["Wellisson", 17],
    ["Paula", 17]
];
```

foreach($dadosClientes as list($nome, $idade)) {
    echo "Nome: ".$nome." - Idade: ".$idade."<br>";
}

# Manipulação de Strings

```
$nome = "...UEIQUW83928398*";

$textoEmMinusculo = "marcos dias da conceição";
$textoEmMaiusculo = mb_strtoupper($textoEmMinusculo, 'UTF-8');
echo $textoEmMaiusculo;
echo "<br>";

echo mb_strtolower($textoEmMaiusculo, 'UTF-8');
echo "<br>";

echo strlen("marcos dias da conceicao");
echo "<br>";

echo substr("77300000",2,3);
echo "<br>";

$texto = "Marcos Dias da Conceição";
echo str_replace(" ","", $texto);
echo "<br>...";

echo trim("   IFTO ifto ifto ifto    ", "d..l");
echo "<br>";

$listaDeCompras = explode(",","mamão,banana,laranja,morango");
echo $listaDeCompras[3];
echo "<br>";

# Datas

echo date("Y-m-dS H:i:s");
echo "<br>";

echo date("H:i");
```

# PDO

```
$con = new PDO("mysql:host=localhost;dbname=sgpc", "root", "");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("SET CHARACTER SET utf8");

try {
    // O método query() lança uma exceção caso encontre algum erro
    $rs = $con->query("SELECT * FROM pessoa");
} catch(Exception $e) {
    echo $e->getMessage();
}

print_r($rs);

if($rs->rowCount() > 0){
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
        echo $row->nome . "<br />";           
    }
}
```

```
// Para utilizar codificação UTF8

$con = new PDO("mysql:host=localhost;dbname=exercicio", "root", "senha");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("SET CHARACTER SET utf8");

// ou

$con = new PDO("mysql:host=localhost;dbname=exercicio", "root", "senha", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// A preparação de uma consulta pode ser feita de duas maneiras
// Por referência, com bindParam()
// Lembre-se que desta forma o valor passado só será avaliado ao chamar execute()

$stmt = $con->prepare("INSERT INTO pessoa(nome, email) VALUES(?, ?)");
$stmt->bindParam(1,”Nome da Pessoa”);
$stmt->bindParam(2,”email@email.com”);

// ou
// Desta forma o valor é passado diretamente

$rs = $con->prepare("INSERT INTO pessoa(nome, email) VALUES(:nome, :email)");
$rs->bindValue(':nome', "Fulano");
$rs->bindValue(':email', "email@email.com");

$rs->execute();

$rs = $con->query(“SELECT idpessoa, nome, email FROM pessoa”);
while($row = $rs->fetch(PDO::FETCH_OBJ)){
	echo $row->idpessoa . “<br />”;
	echo $row->nome . “<br />”;
	echo $row->email . “<br />”;
}

$rs = $con->prepare("SELECT idpessoa, nome, email FROM pessoa WHERE nome LIKE ?”);
$rs->bindParam(1, $nome . “%”);
if($rs->execute()){
    if($rs->rowCount() > 0){
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
        	echo $row->idpessoa . “<br />”;
        	echo $row->nome . “<br />”;
        	echo $row->email . “<br />”;
        }
    }       
}

$stmt = $con->prepare("UPDATE pessoa SET nome = ?, email = ? WHERE idpessoa = ?");
$stmt->bindParam(1,$nome );
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$id);
$stmt->execute();
```

## Mais sobre PDO

exec	int	Utilizado para insert, update e delete.
query	PDOStatement	Utilizado para resultados tabulares, comando select.
prepare	PDOStatement	Cria um prepared statement, utilizado para dados variáveis.

fetch()	Retorna a próxima linha do resultado.
fetchAll()	Retorna um array com todos os resultados.
fetchObject()	Retorna a próxima linha do resultado como objeto.
fetchColumn()	Retorna uma coluna da próxima linha do resultado.