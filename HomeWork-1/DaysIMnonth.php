<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DaysInMonth</title>
</head>
<body>
    <form action="DaysIMnonth.php" method="post">
        <input type="number" name="year" id="year" step="1"/>
        <select name="month" id="month" class="form-control">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <button type="submit" name="submit" value="submit">Calc</button>
    </form>
    <?php if(isset($_POST['submit'])) {
        $year = $_POST['year'];
        $month = $_POST['month'];
        switch($month) {
            case '1':
                $monthName = 'January';
                break;
            case '2':
                $monthName = 'February';
                break;
            case '3':
                $monthName = 'March';
                break;
            case '4':
                $monthName = 'April';
                break;
            case '5':
                $monthName = 'May';
                break;
            case '6':
                $monthName = 'June';
                break;
            case '7':
                $monthName = 'July';
                break;
            case '8':
                $monthName = 'August';
                break;
            case '9':
                $monthName = 'September';
                break;
            case '10':
                $monthName = 'October';
                break;
            case '11':
                $monthName = 'November';
                break;
            case '12':
                $monthName = 'December';
                break;
        }
        $isLeapYear = ($year % 4) || (($year % 100 === 0) &&
            ($year % 400)) ? 0 : 1;
        $isLeapYear ? $leap="leap" : $leap="non-leap";
        $daysInMonth = ($month == 2) ?
            (28 + $isLeapYear) : 31 - ($month - 1) % 7 % 2;
        echo "<br>Year $year is $leap. <br>In $monthName $daysInMonth days. <br>";
    }
    ?>
</body>
</html>