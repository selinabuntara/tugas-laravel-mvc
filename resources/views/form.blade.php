<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="/welcome" method="POST">
            @csrf
            <div>
                <h1>Buat Account Baru!</h1>
                <h3>Sign Up Form</h3>
            </div>
            <div>
                <label for="first_name">First name:</label>
                <br><br>
                <input type="text" name="first_name" id="first_name">
                <br><br>
                <label for="last_name">Last name:</label>
                <br><br>
                <input type="text" name="last_name" id="last name">
                <br><br>
            </div>
            <div>
                <label>Gender:</label>
                <br><br>
                <input type="radio" name="gender" value='0' >Male<br>
                <input type="radio" name="gender" value='1' >Female<br>
                <input type="radio" name="gender" value='2' >Other<br><br>
            </div>
            <div>
                <label>Nationality:</label>
                <br><br>
                <select>
                    <optgroup label="Asia">
                        <option value="i">Indonesian</option>
                        <option value="c">Chinese</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="it">Italian</option>
                        <option value="g">German</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <br>
                <label>Language Spoken:</label>
                <br><br>
                <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
                <input type="checkbox" name="language" value="1">English<br>
                <input type="checkbox" name="language" value="2">Other<br>
            </div>
            <div>
                <br>
                <label for="bio">Bio:</label>
                <br><br>
                <textarea cols="40" rows="10" id="bio"></textarea>
                <br>
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </body>
</html>