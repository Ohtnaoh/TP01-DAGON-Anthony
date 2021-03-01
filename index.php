<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>TP01-DAGON-Anthony</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <h1>Welcom to Anthony Dagon's TP01. :)</h1>
  <form action="/my-futur-form" method="post">
    <div>
      <label for="name">Name :</label>
      <input type="text" id="name" name="name">
    </div>

    <div>
      <label for="firstname">Firstname :</label>
      <input type="text" id="firstname" name="firstname">
    </div>

    <div>
      <label for="address">Address :</label>
      <input type="text" id="address" name="address">
    </div>

    <div>
      <label for="postalcode">Postal code :</label>
      <input type="number" id="postalcode" name="postalcode">
    </div>

    <div>
      <label for="phonenumer">Phone Number :</label>
      <input type="tel" id="phonenumer" name="phonenumer">
    </div>

    <div>
      <label for="email">Email :</label>
      <input type="email" id="email" name="email">
    </div>

    <div>
      <label for="salutation">Salutation :</label>
      <input type="text" list="civilityList" name="civility">
      <datalist id="civilityList">
        <option value="Mr">
        <option value="Mrs">
      </select>
    </div>

    <div>
      <label for="password">Password :</label>
      <input type="hidden" id="password" name="password">
    </div>

    <div>
      <label for="login">Login :</label>
      <input type="text" id="login" name="login">
    </div>

    <div class="button">
        <button type="submit">Register</button>
    </div>

  </form>
</body>

</html>