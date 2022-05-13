<?php include 'preset.php'?>
        <style>
            #Browse{
                background-color:blueviolet;
                color:white;
            }
        </style>
            <form action="Feed.php" method="post">
                Username: <input type="text" name="user"><br><br>
                Text: <textarea name="content" rows="4" cols="50"><br><br>
                Announcement: <input type="checkbox" name="announce"><br><br>
                Thumbnail: <input type="url" name="link"><br><br>
                <input type="submit" value="Post">
            </form>
        </div>
    </body>
</html>