<?php
    class layouts{
        public function heading(){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="css/style.css" />
            </head>
            <body>
            <?php
        }
        <?php
        public function body(){
        ?>
        <h1>Welcome to this Great Website!</h1>
        }

        

        public function footer(){
            ?>
            <div class="footer">
                Copyright &copy; ICS <?php print date("Y"); ?>
            </div>
        </body>
        </html>
            <?php
        }
    }