<link rel="stylesheet" href="./css/stilus.css" type="text/css"/>
<form action="?oldal=belep" method="post">
  <fieldset>
    <legend>Bejlentkezés</legend>
    <input type="text" name="felhasznalo" placeholder="felhasználó" required>
    <input type="password" name="jelszo" placeholder="jelszó" required>
    <input type="submit" name="belepes" value="Belépés">
  </fieldset>
</form>

<h3>Regisztrálja magát, ha még nem felhasználó!</h3>

<form action="?oldal=regisztral" method="post">
  <fieldset>
    <legend>Regisztráció</legend>
    <input type="text" name="vezeteknev" placeholder="vezetéknév" required>
    <input type="text" name="utonev" placeholder="utónév" required>
    <input type="text" name="felhasznalo" placeholder="felhasználó név" required>
    <input type="password" name="jelszo" placeholder="jelszó" required>
    <input type="submit" name="regisztracio" value="Regisztráció">
  </fieldset>
</form>
