<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
        $name = "Nur Qurratul Ain binti Norhasrizal";
        $matric = "AI250186";
        $course = "Bachelor of Software Engineering with Honours";
        $year = "Year 2";
        $address = "Parit Raja, 86400 Batu Pahat, Johor";
    ?>
    <table border="1" cellpadding="5">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>