<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calendar</title>
</head>
<body>
    <div class="container">
        <p class="day"> <?php 
        function convertdate($d) {
            switch($d) {
                case "Monday" : {
                    return "Thứ Hai";
                    break;
                }
                case "Tuseday" : {
                    return "Thứ ba ";
                    break;
                }
                case  "Wednesday" : {
                    return "Thứ Tư";
                    break;
                }
                case "Thursday" : {
                    return "Thứ 5";
                    break;
                }
                case "Friday" : {
                    return "Thứ 6";
                    break;
                }
                case "Saturday" : {
                    return "Thứ 7";
                    break;
                }
                case "Sunday" : {
                    return "Chủ nhật";
                    break;
                }
                default : {
                    return "fail";
                    break;
                }
            }
        }
        echo(convertdate(date("l")));
        
        ?></p>
        <p class="time"><?php echo "ngay ".date("d")." thang ".date("m")." nam ".date("Y") ?></p>

        <p class="quote">
        <?php
        $qoute = array("Don’t cry because it’s over, smile because it happened. ― Dr. Seuss","You only live once, but if you do it right, once is enough. ― Mae West",
    "In three words I can sum up everything I’ve learned about life: it goes on. ― Robert Frost","To live is the rarest thing in the world. Most people exist, that is all. ― Oscar Wilde",
    "i'm powerful,i'm so confident","Good friends, good books, and a sleepy conscience: this is the ideal life. ― Mark Twain");


    $random_keys=array_rand($qoute,4);
    echo $qoute[$random_keys[0]];

        ?>
    </p>
        
    </div>
</body>
</html>