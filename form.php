<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Handling with PHP</h1>

    <form action="./includes/server.php" method="post">
        <label for="firstName">First Name</label>
        <input type="firstName" name="firstName" id="firstName">

        <label for="lastName">Last Name</label>
        <input type="lastName" name="lastName" id="lastName">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <select name="favGame" id="favGame">
            <option value="none">NONE</option>
            <option value="GTA V">GTA V</option>
            <option value="RDR 2">RDR 2</option>
        </select>

        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>