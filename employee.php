<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Уволенные</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <div class="menu">
                             <ul>
                                 <li><a href="index.php">Все</a></li>
                                 <li><a href="end_date.php" class="btn">Испытательный срок</a></li>
                                 <li><a href="employee.php">Уволенные</a></li>
                             </ul>
                         </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<table>
    <tr>
        <th>Начальник</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Должность</th>
        <th>Дата приема</th>
        <th>Дата увольнения</th>
        <th>ЗП</th>
        <th>Причина увольнения</th>
    </tr>
    <?php


    $query = mysqli_query($connect, "SELECT employee.*, position.name as position_name, dismissal_reason.name as dismissal_reason_name, CONCAT(E1.first_name, ' ', E1.last_name, ' ', E1.middle_name) as chief_name FROM `employee` INNER JOIN position ON employee.position_id = position.id INNER JOIN dismissal_reason ON employee.dismissal_reason_id = dismissal_reason.id INNER JOIN employee AS E1 ON employee.chief_id = E1.id");


    while ($employee = mysqli_fetch_assoc($query)) {
//            echo "<pre>";
//            var_dump($employee);
//            echo "</pre>";
//            die();

        ?>
        <tr>
            <td><?= $employee['chief_name']?></td>
            <td><?= $employee['first_name']?></td>
            <td><?= $employee['last_name']?></td>
            <td><?= $employee['middle_name']?></td>
            <td><?= $employee['position_name']?></td>
            <td><?= $employee['start_date']?></td>
            <td><?= $employee['end_date']?></td>
            <td><?= $employee['salary']?></td>
            <td><?= $employee['dismissal_reason_name']?></td>

        </tr>
        <?php
    }
    ?>




</table>
    <div class="page_list" align="center">
        <a href="#"><button class="page_button">1</button> </a>
        <a href="#"><button class="page_button">2</button> </a>
        <a href="#"><button class="page_button">3</button> </a>

</body>
</html>

