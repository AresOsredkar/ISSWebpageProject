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
        <script>
                    
            function Check(){
                var msg = "";
                if(document.getElementById('username').value.length < 3){
                    msg += "Username too short\n";
                }
                if(document.getElementById('email').value.length < 8){
                    msg += "Email inputed incorrectly\n";
                }
                if(document.getElementById('password').value.length < 8){
                    msg += "Password too short\n";
                }
                if(document.getElementById('passwordR') != document.getElementById('password')){
                    msg += "Passwords don't match\n";
                }
                const d = new Date();
                if(getFullYear(document.getElementById('date')) > 2006){
                    msg += "You must be 18 or older\n";
                }
                window.alert(msg);
                return false;
            }

        </script>
            <h1>Register your new account.</h1>
            <form method="POST">
                <table>
                    <tr><td>Username</td><td><input type="text" id="username" required></td></tr>
                    <tr><td>E-mail address</td><td><input type="text" id="email" required></td></tr>
                    <tr><td>Password</td><td><input type="password" id="password" required></td></tr>
                    <tr><td>Confirm Password</td><td><input type="password" id="passwordR" required></td></tr>
                    <tr><td>Gender</td><td><input type="radio" name="gender" id="M" required><label>Male</label><input type="radio" name="gender" id="F"><label>Female</label><input type="radio" name="gender" id="O"><label>Other</label></td></tr>
                    <tr><td>Interests</td><td><textarea id="desc"></textarea></td></tr>
                    <tr><td>Date of Birth</td><td><input type="datetime" id="date" required></td></tr>
                    <tr><td>Continent</td><td><input list="contin">
                        <datalist id="contin"><option value="Europe">
                        <option value="Asia"></option><option value="South America"></option><option value="North America"></option><option value="Africa"></option>
                        </datalist></td></tr>
                </table>
                <label>I agree with terms</label><input type="checkbox" id="terms" required><br>
                <label>I wish to get newsletters</label><input type="checkbox" id="newsletter">
            
                <input type="hidden" id="hidden"><br>
                <button type="submit">Register</button><button type="reset">Reset</button><br>
                <a href="Login.php">Already have an account?</a>
            </form>
        </div>
    </body>
</html>