<div class="belepes-oldal-content" xmlns="http://www.w3.org/1999/html">
  <div class="bejelentkezes-box">
    <h3>Bejelentkezés</h3>
    <form action="?oldal=belep" method="post">
      <div class="mb-3 row">
        <label for="felhasznalo" class="col-form-label col-sm-6">Felhasználónév</label>
        <input type="text" id="felhasznalo" class="col-sm-6" name="felhasznalo" placeholder="felhasználó"
               required/>
      </div>

      <div class="mb-3 row">
        <label for="jelszo" class="col-form-label col-sm-6">Jelszó</label>
        <input type="password" id="jelszo" class="col-sm-6" name="jelszo" placeholder="jelszó" required/>
      </div>

      <button type="submit" name="belepes" class="btn btn-success">
        <i class="bi bi-box-arrow-in-right"></i>
        Belépés
      </button>
    </form>
  </div>

  <div class="regisztracios-box">
    <h5>Regisztrálja magát, ha még nem felhasználó!</h5>

    <h3>Regisztráció</h3>
    <form action="?oldal=regisztral" method="post">
      <div class="mb-3 row">
        <label for="vn" class="col-form-label col-sm-6">Vezetéknév</label>
        <input type="text" id="vn" class="col-sm-6" name="vezeteknev" placeholder="vezetéknév" required/>
      </div>

      <div class="mb-3 row">
        <label for="un" class="col-form-label col-sm-6">Utónév</label>
        <input type="text" id="un" class="col-sm-6" name="utonev" placeholder="utónév" required/>
      </div>

      <div class="mb-3 row">
        <label for="fh" class="col-form-label col-sm-6">Felhasználónév</label>
        <input type="text" id="fh" class="col-sm-6" name="felhasznalo" placeholder="felhasználó név"
               required/>
      </div>

      <div class="mb-3 row">
        <label for="pw" class="col-form-label col-sm-6">Jelszó</label>
        <input type="password" id="pw" class="col-sm-6" name="jelszo" placeholder="jelszó" required/>
      </div>

      <button type="submit" name="regisztracio" class="btn btn-light">
        <i class="bi bi-pencil-square"></i>
        Regisztráció
      </button>
    </form>

  </div>

</div>