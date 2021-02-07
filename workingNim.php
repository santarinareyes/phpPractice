<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        global $sticks_left;
        if (isset($_POST['click_three'])) {
            $take = intval($_POST['take']);
            $take = $take - 3;
            $sticks_left = $take;
                if ($sticks_left < 1) {
                    $sticks_left = 'lost';
                    for ($i = 0; $i < count($_POST['player']); $i++) {
                        echo "Player " . $_POST['player'][$i] . " ";
                    }
                }
        }
    } else {
        $sticks_left = 21;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['click_two'])) {
            $take = intval($_POST['take']);
            $take = $take - 2;
            $sticks_left = $take;
                if ($sticks_left < 1) {
                    $sticks_left = 'lost';
                    for ($i = 0; $i < count($_POST['player']); $i++) {
                        echo "Player " . $_POST['player'][$i] . " ";
                    }
                }
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['click_one'])) {
            $take = intval($_POST['take']);
            $take--;
            $sticks_left = $take;
                if ($sticks_left < 1) {
                    $sticks_left = 'lost';
                    for ($i = 0; $i < count($_POST['player']); $i++) {
                        echo "Player " . $_POST['player'][$i] . " ";
                    }
                }
        } 
    }

    echo $sticks_left;
?>
    <form method="POST" action="">
        <label for="player">Choose a player:</label><br/>
        <input type="radio" name="player[]" value="1" checked="checked">Player One</br>
        <input type="radio" name="player[]" value="2">Player Two</br><br/>
        <label for="sticks">How many sticks?</label><br/>
        <input type="hidden" id="take" name="take" value="<?php echo $sticks_left;?>" />   
        <input type="submit" name="click_one" id="click_one" value ="Take 1 sticks"/>
        <input type="submit" name="click_two" id="click_two" value ="Take 2 sticks"/>
        <input type="submit" name="click_three" id="click_three" value ="Take 3 sticks"/>
        </form>

</body>
</html>