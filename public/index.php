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

    <?php
    if (isset($_POST['quantity'])) {
        $numLastGen = $_POST['quantity'];
    } else {
        $numLastGen = 1;
    }
    ?>


    <!-- Header of document -->
    <header class="main-header">
        <h1><span class="logo"><img src="img/logo-aos-new.png" alt="Dice Simulator" /></span>Dice Simulator</h1>
    </header>

    <div class="hidden" style="font-family: 'Pompei Std'; display: none">preload</div>

    <article class="main-description">
        <p>The <strong>Dice Simulator</strong> is a web application designed to allow you to roll dice for tabletop games.</p>
    </article>

    <!-- Input form for roll -->
    <div class="form">
        <form method="post">
            <label for="quantity">Number of die: </label>
            <input type="number" id="quantity" name="quantity" min="1" max="1000" value="<?php echo $numLastGen; ?>">
            <input type="submit" name="generateRolls" class="generateRolls" value="Generate Rolls" />
        </form>
    </div>

    <!-- Roll Output -->
    <div class="allresults">
        <?php

        if (isset($_POST['generateRolls'])) {
            $num_rolls = $_POST['quantity'];

            // I'm creating a new instance of the Generate Class calld $generateBattles
            $generateRolls = new generate;

            //Im calling the generateBattle function and then looping through it here
            foreach ($generateRolls->generateRolls($num_rolls) as $roll) {

                echo sprintf(
                    '<div class="result">
                    <h3>Die %d</h3>
                    <h4>Result: %d</h4>
                </div>',
                    $roll['die'],
                    $roll['result']
                );
            }
        }
        ?>
    </div>

</body>

</html>