<!DOCTYPE html>
<html>
<head>
    <title>Calendário</title>
    <style>
        .month {
            display: inline-block;
            margin: 10px;
            background-color: #e8f0fe;
            padding: 10px;
            border-radius: 5px;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<?php
  include_once "menu.php";
  ?>
<body>
    <?php
        // Obter o ano atual
        $anoAtual = date('Y');

        // Array com os nomes dos meses
        $mesesAno = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    ?>

    <h2>Calendário - <?php echo $anoAtual; ?></h2>

    <?php
        // Loop para exibir os meses do ano
        for ($mes = 1; $mes <= 12; $mes++) {
            // Obter o número de dias no mês atual
            $numDias = cal_days_in_month(CAL_GREGORIAN, $mes, $anoAtual);

            // Obter o dia da semana do primeiro dia do mês
            $primeiroDia = date('w', mktime(0, 0, 0, $mes, 1, $anoAtual));

            echo '<div class="month">';
            echo '<h3>'.$mesesAno[$mes].'</h3>';

            echo '<table>';
            echo '<tr>';

            // Exibir os cabeçalhos dos dias da semana
            echo '<th>D</th>';
            echo '<th>S</th>';
            echo '<th>T</th>';
            echo '<th>Q</th>';
            echo '<th>Q</th>';
            echo '<th>S</th>';
            echo '<th>S</th>';

            echo '</tr>';

            echo '<tr>';

            // Preencher os dias vazios no início do mês
            for ($i = 0; $i < $primeiroDia; $i++) {
                echo '<td></td>';
            }

            // Loop para exibir os dias do mês
            for ($dia = 1; $dia <= $numDias; $dia++) {
                // Verificar se é o último dia da semana
                if (($primeiroDia + $dia - 1) % 7 == 0 && $dia != 1) {
                    echo '</tr><tr>'; // Iniciar nova linha
                }

                echo '<td>'.$dia.'</td>';
            }

            // Preencher os dias vazios no final do mês, se necessário
            $ultimoDia = ($primeiroDia + $numDias - 1) % 7;
            if ($ultimoDia != 6) {
                for ($i = $ultimoDia + 1; $i < 7; $i++) {
                    echo '<td></td>';
                }
            }

            echo '</tr>';
            echo '</table>';
            echo '</div>';
        }
    ?>

<?php
include_once "rodape.php";
?>
</body>
</html>
