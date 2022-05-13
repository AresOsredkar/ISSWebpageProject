        
<?php include 'preset.php'?>
        <style>
            #LogIn{
                background-color:blueviolet;
                color:white;
            }
            form {

                width:60%;
                margin:auto auto; 
            }
            h1 {
                width:60%;
                margin:10px auto; 
            }
            input {
                border-radius: 5px;
            }
            td {
                width:30%;
                text-transform: capitalize;
            }
            button {
                margin:10px;
                padding:20px;
                background-color:darkgreen;
                color:white;
                cursor: pointer;
            }
        </style>
        <div class="content">
            <h1>Login with your account</h1>
            <form method="POST">
                <table>
                    <tr><td>Username</td><td><input type="text" id="username" required><br></td></tr>
                    <tr><td>Password</td><td><input type="password" id="password" required><br></td></tr>
                    <tr><td>Remember password</td><td><input type="checkbox" id="remember"><br></td></tr>
                </table>
                    <tr><td><button type="submit">Login</button><br>
                <a href="Register.php">Don't have an account yet?</a>
            </form>
        </div>
    </body>
</html>