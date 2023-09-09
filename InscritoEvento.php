
<link href="css/styles.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
<link rel="stylesheet" type="text/css" href="css/product.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    table th {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #f9f9f9;
    }

    .rodape {
        margin-top: 500px;
    }
</style>



<?php
include_once "menu.php";
include_once "db_conexao.php";

// Consulta para buscar as inscrições cadastradas e o nome do evento correspondente
$sql_inscricoes = "SELECT inscricoes.nome_participante, inscricoes.email_participante, inscricoes.data_inscricao, evento.nome_evento
                   FROM inscricoes
                   INNER JOIN evento ON inscricoes.id = evento.id_evento";

$resultado_inscricoes = mysqli_query($conexao, $sql_inscricoes);
?>

<h2>Lista de Inscritos em Eventos</h2>

<table>
    <thead>
        <tr>
            <th>Evento</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Inscrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($resultado_inscricoes) > 0) {
            while ($inscricao = mysqli_fetch_assoc($resultado_inscricoes)) {
                echo "<tr>";
                echo "<td>" . $inscricao['nome_evento'] . "</td>";
                echo "<td>" . $inscricao['nome_participante'] . "</td>";
                echo "<td>" . $inscricao['email_participante'] . "</td>";
                echo "<td>" . $inscricao['data_inscricao'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum dado cadastrado</td></tr>";
        }
        ?>
    </tbody>
</table>

<div class="rodape">
    <?php
    include_once "rodape.php";
    ?>
</div>
