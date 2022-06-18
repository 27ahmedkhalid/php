<!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <style> body{background-color:gray;}</style>

            <?php
            //use switch statment to select one of many blocks of code to be executed
            $color = 'red';
            switch($color){
                case($color = 'blue'):
                    echo'you like blue color';
                    break;
                case($color = 'red'):
                    echo'you like red color';
                    break;
                case($color = 'yellow'):
                    echo'you like yellow color';
                    default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
            ?>
        </body>
    </html>