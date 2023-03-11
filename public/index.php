<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/dscss.css" />
    <title>Dice Simulator</title>
    <?php
    include("../src/generate.php");
    ?>
</head>

<body>

    <!-- Header of document -->
    <header class="main-header">
        <h1><span class="logo"><img src="img/logo-aos-new.png" alt="Dice Simulator" /></span>Dice Simulator</h1>
    </header>

    <article class="main-description">
        <p>The <strong>Dice Simulator</strong> is a web application designed to allow you to roll dice for tabletop games.</p>
    </article>

    <!-- Input form for roll -->
    <div class="form">
        <form method="post">
            <label for="quantity">Number of die: </label>
            <input type="number" id="quantity" name="quantity" min="1" max="1000" value="<?php echo $numLastGen; ?>">
            <input type="submit" name="generateBattle" class="generateBattle" value="Generate Battle" />
        </form>
    </div>

    <!-- Roll Output -->
    <div class="allresults">
        <?php


        ?>
    </div>
</body>

</html>