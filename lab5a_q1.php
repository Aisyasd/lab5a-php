<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab5a Q1 - Personal Details</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; }
        td { border: 1px solid #333; padding: 10px; text-align: left; }
        td:first-child { font-weight: bold; background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">My Personal Details</h2>

    <?php
        $name = "Aisyah Balqis";           
        $matric = "CI230109";       
        $course = "BIW";            
        $year = "Year 3";               
        $address = "Taman Universiti Parit Raja";     
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>