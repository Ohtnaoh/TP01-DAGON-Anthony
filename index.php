<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>TP01-DAGON-Anthony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="script.js"></script>
</head>

<body>
<div class="mx-auto" style="width: 500px;">
    <h1>Welcom to Anthony Dagon's TP01. :)</h1>
    
    <form class="mt-5" action="/my-futur-form" method="post">

        <div class="form-group row ml-4">
            <div class="form-group col-sm-4">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="lname">
            </div>
            <div class="form-group col-sm-4">
                <label for="firstname" class="form-label">Firstname :</label>
                <input type="text" class="form-control" name="firstname">
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group col-sm-4">
                <label for="address" class="form-label">Address :</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group col-sm-4">
                <label for="postalcode" class="form-label">Postal Code :</label>
                <input type="number" class="form-control" name="postalcode">
            </div>
        </div>

        <div class="form-group col-sm-4">
            <label for="phonenumer" class="form-label">Phone number :</label>
            <input type="number" class="form-control" name="phonenumer">
        </div>

        <div class="form-group col-sm-4">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group mt-3">
            <label for="salutation" class="form-label">Salutation :</label>
            <input type="text" class="form-control" list="civilityList" name="salutation">
            <datalist id="civilityList">
                <option value="Mr">
                <option value="Mrs">
            </datalist>
        </div>

        <div class="form-group col-sm-4 mt-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group col-sm-4 mt-3">
            <label for="confirmPassword" class="form-label">Confirm Password :</label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
        </div>

        <div class="form-group col-sm-4">
            <label for="login" class="form-label">Login :</label>
            <input type="text" class="form-control" name="login">
        </div>

        <div class="form-group col-sm-4 mt-3 text-center">
            <input type="submit" class="btn btn-secondary" value="Register"></button>
        </div>

    </form>
    </div>

</body>

</html>