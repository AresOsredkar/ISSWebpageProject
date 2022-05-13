<?php include 'preset.php'?>
            <?php 
                $username = $_POST["user"];
                $text = $_POST["content"];
                $ann = ""
                if(isset($_POST["announce"])){
                    $ann = " ann";
                }
                $link = $_POST["link"];
                $postDiv = "<div class='post" . $ann . "'><div class='thumbnail'><img src='" . $link . "'></div><div class='username'>" . $username 
                . "<br>" . date() . "</div><div class='postContent'>" . $text . "</div></div>";
                echo $postDiv;
            ?>
       
    
        </div>
    </body>
</html>