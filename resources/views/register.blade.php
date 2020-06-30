<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="{{ route('auth.welcome') }}" method="POST" id="myForm">
        {{csrf_field()}}

        <label for="firstName"> First Name: </label>
        <br><br>
        <input type="text" id="firstName" name="firstName">
        <br><br>
        <label for="lastName"> Last Name: </label>
        <br><br>
        <input type="text" id="lastName" name="lastName">
        <br><br>
        <label for="gender">Gender:</label>
        <br><br>
        <input type="radio" id="male" name="gender" value="male"> Male <br>
        <input type="radio" id="female" name="gender" value="female"> Female <br>
        <input type="radio" id="other" name="gender" value="other"> Other <br>
        <br>
        <label for="nationality">Nationality:</label>
        <br><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="british">British</option>
            <option value="american">American</option>
            <option value="spanish">Spanish</option>
        </select>
        <br><br>
        <label for="language">Language Spoken:</label>
        <br><br>
        <input type="checkbox" id="indonesian" name="language"> Indonesian <br>
        <input type="checkbox" id="english" name="language"> English <br>
        <input type="checkbox" id="other" name="language"> Other <br>
        <br>
        <label for="bio">Bio:</label>
        <br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>