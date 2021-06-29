<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PERSONNEL</title>
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

			<th>Фамилия</th>
			<th>Имя</th>
            <th>Отчество</th>
            <th>Должность</th>
            <th>Дата приема</th>
            <th>Дата увольнения</th>
            <th>ЗП</th>

		</tr>
        <?php


        $query = mysqli_query($connect, "SELECT * FROM `employee` INNER JOIN position ON employee.position_id = position.id");


        while ($employee = mysqli_fetch_assoc($query)) {
//            echo "<pre>";
//            var_dump($employee);
//            echo "</pre>";
//            die();

            ?>
                    <tr>
                        <td><?= $employee['first_name']?></td>
                        <td><?= $employee['last_name']?></td>
                        <td><?= $employee['middle_name']?></td>
                        <td><?= $employee['name']?></td>
                        <td><?= $employee['start_date']?></td>
                        <td><?= $employee['end_date']?></td>
                        <td><?= $employee['salary']?></td>


                    </tr>
        <?php
        }

        ?>

    </div>



	</table>
<div class="page_list" align="center">
    <a href="#"><button class="page_button">1</button> </a>
    <a href="#"><button class="page_button">2</button> </a>
    <a href="#"><button class="page_button">3</button> </a>

</body>
</html>

