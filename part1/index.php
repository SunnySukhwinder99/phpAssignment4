<?php
            require('Vending.php');
            $insertedMoney = $remaining = 0;
            $product = '';

            
            if(isset($_POST['one']))
            {
                $insertedMoney = $_REQUEST['cash'] + 100;
            }
            if(isset($_POST['fifty']))
            {
                $insertedMoney = $_POST['cash'] + 50;
            }
            if(isset($_POST['ten']))
            {
                $insertedMoney = $_POST['cash'] + 10;
            }
            if(isset($_POST['twentyfive']))
            {
                $insertedMoney = $_POST['cash'] +25;
            }
            if(isset($_POST['five']))
            {
                $insertedMoney = $_POST['cash'] +5;
            }
            
            if(isset($_POST['cancel']))
            {
            
                header('Location: index.php');
            }
            
            if(isset($_POST['submit']))
            {
                
                if(!isset($_POST['snack'])) 
                { 
                    echo "Select the product";
                    $insertedMoney = $_POST['cash'];
                }
                    
                else
                {
                    $insertedMoney = $_POST['cash'];
                    $product = $_POST['snack'];
                    switch ($product) {
                        case "Chocolate":
                            if($insertedMoney < 125)
                                echo "Amount is not Sufficient.";
                            else
                            {
                                $insertedMoney=$remaining=$insertedMoney-125;
                                $chocolate = new Vending('Chocolate', $insertedMoney, 125,$remaining);
                               $chocolate->buys();
                               
                            }
                            break;
                        case "Pop":
                            if($insertedMoney < 150)
                                echo "Amount is not Sufficient.";
                            else
                            {
                                $insertedMoney=$remaining=$insertedMoney-150;
                                $pop = new Vending('Pop', $insertedMoney, 150,$remaining);
                               $pop->buys();
                               
                            }
                            break;
                        case "Chips":
                            if($insertedMoney < 175)
                                echo "Amount is not Sufficient.";
                            else
                            {
                                $insertedMoney=$remaining=$insertedMoney-175;
                               $chips = new Vending('Chips', $insertedMoney, 175,$remaining);
                               $chips->buys();
                               
                            }
                             
                            break;
                    }
                }       
            }  
        ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <form action='' method='post'>


        <label class="row">Inserted Money:</label><br><br>
        <input type="text" name='cash' id='cash' value="<?php echo $insertedMoney;?>" readonly /> <br>
        <br><br>
        <label class="row">Snacks:</label><br> &nbsp;<br>
        <input type="radio" name="snack" value="Chocolate"
            <?php if(isset($product)){ if($product=='Chocolate' ) echo 'checked = "checked"' ; else echo '' ;} ?>>Chocolate
        Bar $1.25<br>
        <input type="radio" name="snack" value="Pop"
            <?php if(isset($product)){ if($product=='Pop' ) echo 'checked = "checked"' ; else echo '' ;} ?>> Pop
        $1.50<br>
        <input type="radio" name="snack" value="Chips"
            <?php if(isset($product)){ if($product=='Chips' ) echo 'checked = "checked"' ; else echo '' ;} ?>>Chips
        $1.75<br>
        <br>
        <label class="row">Coins:</label>
        <div class="row">
            &nbsp; &nbsp;
            <button name='one' id='one'>1$</button>
            <button name='fifty' id='fifty'>50C</button>
            <button name='twentyfive' id='twentyfive'>25C</button>
            <button name='ten' id='ten'>10C</button>
            <button name='five' id='five'>5C</button><br><br>
        </div>
        <input type="submit" name="submit" value="submit">
        <button name='cancel' id='cancel'>Cancel</button><br><br>
    </form>

</body>

</html>