<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab5a Q3 - Rectangle Area Calculator</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .result { font-size: 24px; color: #0066cc; margin: 20px; }
    </style>
</head>
<body>
    <h2>Rectangle Area Calculator</h2>

    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Calling the function with sample values
        $l = 15;
        $w = 8;
        $area = calculateArea($l, $w);
    ?>

    <div class="result">
        Length = <?php echo $l; ?> cm<br>
        Width = <?php echo $w; ?> cm<br><br>
        <strong>Area of rectangle = <?php echo $area; ?> cm²</strong>
    </div>
</body>
</html>