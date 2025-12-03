<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab5a Q2 - Students List</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 30px auto; }
        th, td { border: 1px solid #444; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Students Information</h2>

    <?php
        $students = [
            "Ali" => ["matric" => "AI230109", "course" => "BIW", "year" => 3],
            "Siti" => ["matric" => "CI230080", "course" => "BIS", "year" => 3],
            "Kumar" => ["matric" => "AI23100", "course" => "BIP", "year" => 2],
            "Aisyah" => ["matric" => "CI231100", "course" => "BIW", "year" => 3],
            "Wei" => ["matric" => "AI230108", "course" => "BIW", "year" => 2]
        ];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year</th>
        </tr>

        <?php
            foreach ($students as $name => $details) {
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>" . $details['matric'] . "</td>";
                echo "<td>" . $details['course'] . "</td>";
                echo "<td>" . $details['year'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>