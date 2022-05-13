<?php include 'preset.php'?>
<?php
        echo "<style>";
        echo "    #Browse{";
        echo "background-color:blueviolet;";
        echo "color:white;";
        echo "    }";
        echo "</style>";
        echo "<br><br>";

        if(isset($_POST["user"])){
            $username = $_POST["user"];
            $text = $_POST["content"];
            $ann = "";
            $chk = "";
            if(isset($_POST["announce"])){
                $ann = " ann";
                $chk = "checked";
            }
            $link = $_POST["link"];
            $postDiv = "<div class='post" . $ann . "'><div class='thumbnail'><img src='" . $link . "'></div><div class='username'>" . $username 
            . "<br>" . date("l jS \of F Y h:i:s A") . "</div><div class='postContent'>" . $text . "</div></div>";
            echo $postDiv;
        }
        $okej = false;
        $napaka = "";
        if(isset($_GET["ack"])){
            $okej = true;

            if(strlen($username)<3 || strlen($username)>15){
                $okej = false;
                echo "<b>Ime ima lahko od 3 do 15 znakov</b>";
            }
            if(strlen($text)>255){
                echo "<b>Besedilo ima lahko do 255 znakov</b>"
                $okej = false;
            }
            
        }
        if(!$okej)
        {
            echo "    <form action='Post.php?akc=1' method='post'>";
            echo "  Username: <input type='text' name='user'><br><br>";
            echo "  Text: <textarea name='content' rows='4' cols='50'></textarea><br><br>";
            echo "  Announcement: <input type='checkbox' name='announce'><br><br>";
            echo "  Thumbnail: <input type='url' name='link'><br><br>";
            echo "  <input type='submit' value='Post'>";
            echo "</form>";
        }
        else{
            echo "    <form action='Post.php?akc=1' method='post'>";
            echo "  Username: <input type='text' name='user' value='". $username . "'><br><br>";
            echo "  Text: <textarea name='content' rows='4' cols='50' value='" . $text . "'></textarea><br><br>";
            echo "  Announcement: <input type='checkbox' name='announce' " . $chk . "><br><br>";
            echo "  Thumbnail: <input type='url' name='link' value='" . $link . "'><br><br>";
            echo "  <input type='submit' value='Post'><br><br>";
            echo "</form>";
        }

        echo "</div>";       
        echo "</body>";
        echo "</html>";
?>