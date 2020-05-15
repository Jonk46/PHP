<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div style="display: flex; flex-direction: column">

<div>
    <h2>Задача 1. Цикли. Шахматна дошка.</h2>
    <table border = '1' align='left' style='height: 100%; '>
        <?php for ($row=1; $row<=8; $row++): ?>
            <tr>
                <?php for ($col=1; $col<=8; $col++): ?>
                    <?php if (($row+$col)%2==0): ?>
                        <td width='30px' height='30px'></td>
                    <?php else: ?>
                        <td width='30px' height='30px' bgcolor='black'></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<div>
    <h2>Задача 2. Цикли. Таблиця з числами.</h2>
    <table border = '1' align='left'>
        <?php for ($row=1; $row<=10; $row++): ?>
            <tr>
                <?php for ($col=1; $col<=10; $col++):
                     $p = $row*$col; ?>
                     <td><?= $p ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<div>
    <h2>Задача 3. Цикли. Таблиця з числами.</h2>
    <table border = '1' align='left' cellpadding='3' cellspacing='0'>
        <?php for ($i=1; $i<=6; $i++): ?>
            <tr>
                <?php for ($j=1; $j<=5; $j++):
                    $p=$i*$j ?>
                    <td><?= $i."*".$j."=".$p ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<div>
    <h2>Задача 4. Масиви. Країни і столиці.</h2>
    <?php $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    asort($ceu);
    foreach ($ceu as $country=>$capital) {
        $capitalPart = substr($capital, 1);
        echo "<p>The capital of $country is <b>$capital[0]</b>$capitalPart.</p>";
    } ?>
</div>

<div>
    <h3>Задача 5. Масиви. Обрахування температури.</h3>
    <?php
    $month_temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $totalTemp = 0;
    $countTemp = count($month_temp);

    foreach ($month_temp as $value) {
        $totalTemp += $value;
    }
    $srTemp = round($totalTemp/$countTemp, 1);
    echo "Average temperature is $srTemp<br>";

    sort($month_temp);
    $min_month_temp = array_values(array_unique($month_temp));
    echo "<br>";
    echo "List of seven lowest temperatures is:";
    for ($i=0; $i<7; $i++) {
        echo " ".$min_month_temp[$i];
    }

    echo "<br>";

    rsort($month_temp);
    $max_month_temp = array_values(array_unique($month_temp));
    echo "<br>";
    echo "List of seven highest temperatures is:";
    for ($i=0; $i<7; $i++) {
        echo " ".$max_month_temp[$i];
    }

    ?>
</div>

</div>
</body>
</html>
