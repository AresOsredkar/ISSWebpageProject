<?php include 'preset.php'?>
        <style>
            #Browse{
                background-color:blueviolet;
                color:white;
            }
        </style>
        <br><br>
            <form action="Post.php" method="post">
                Username: <input type="text" name="user"><br><br>
                Text: <textarea name="content" rows="4" cols="50"></textarea><br><br>
                Announcement: <input type="checkbox" name="announce"><br><br>
                Thumbnail: <input type="url" name="link"><br><br>
                <input type="submit" value="Post">
            </form>
        </div>
        <?php 
                $username = $_POST["user"];
                $text = $_POST["content"];
                $ann = "";
                if(isset($_POST["announce"])){
                    $ann = " ann";
                }
                $link = $_POST["link"];
                $postDiv = "<div class='post" . $ann . "'><div class='thumbnail'><img src='" . $link . "'></div><div class='username'>" . $username 
                . "<br>" . date("l jS \of F Y h:i:s A") . "</div><div class='postContent'>" . $text . "</div></div>";
                echo $postDiv;
            ?>
    </body>
</html>