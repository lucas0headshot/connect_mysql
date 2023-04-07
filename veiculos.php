<h1>Veiculo</h1>

<p> Cadastro de Veículos </p>

<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$database = 'bd_reservas';
$porta = 3306;

$con = mysqli_connect($host,$user,$pwd,$database,$porta);

    if (!$con){
        die('Falha ao conectar com o Mysql!! ');
    }

    //fazendo ligação com o banco e mostrado a tabela de veiculos
$db = mysqli_select_db($con, $database);

$sql = "select * from veículo";

$res = mysqli_query($con, $sql);

while ($linha = mysqli_fetch_array($res))
{
    echo $linha ['ID'].' '.$linha ['NOME'].' '.
         $linha ['ANO'].' '.$linha ['KM']; 
    echo "<br>";
}

    //mostrando tabela de reservas 
    $res = mysqli_query($linha, 'Select * from reserva');

    while ($row = mysqli_fetch_array($res)) 
    {
        echo $linha['ID'],' ',$linha['MOTIVO'],' ',$linha['ID_COLABORADOR'],' ',$linha['ID_VEICULO'];
        echo '<br>';
    }

        //mostrndo tabela de colaboradores
        $res = mysqli_query($linha, 'Select * from colabor');

        while ($row = mysqli_fetch_array($res)) 
        {
            echo $linha['ID'],' ',$linha['NOME'],' ',$linha['NMR_CNH'];
            echo '<br>';
        }
?>
