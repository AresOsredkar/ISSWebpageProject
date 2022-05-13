<?php include 'preset.php'?>
            <h1>Account details</h1>
            <p>Here you will be able to change all the account settings, with exclusevly php when we get there.</p>
            <?php
            if(isset($_POST["img"]))
            {
                echo "<img src='" . "img/slika.jpg" . "' width='200'>";
            }
            else{
                echo "<img src='img/placeholderavatar.png' width='200'>";
            }
            
            ?>
            <p>Placeholder image representing an avatar picture</p>
            <pre>
                Name:
                Surname:
                Date of birth:
                E-mail:
                Interests:
            </pre>
        </div>
    </body>
</html>