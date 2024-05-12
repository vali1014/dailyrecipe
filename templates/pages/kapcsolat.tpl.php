<h2>Kapcsolat</h2>

<form name="kapcsolat" action="?oldal=email_elkuldve" method="post" onsubmit= "return ellenoriz();">
  <div class="mb-3 row">
    <label for="nev" class="col-form-label col-sm-6">
      Név (minimum 8, maximum 20 betű)</label>
    <input type="text" id="nev" name="nev" class="col-sm-6" size="20"/>
  </div>

  <div class="mb-3 row">
    <label for="email" class="col-form-label col-sm-6">E-mail (kötelező, maximum 40 karakter)</label>
    <input type="email" id="email" name="email" class="col-sm-6" size="40" />
  </div>

  <div class="mb-3 row">
    <label for="szoveg" class="col-form-label col-sm-6">Üzenet (minimum 20 karakter)</label>
    <textarea id="szoveg" name="szoveg" class="col-sm-6" cols="40" rows="10"></textarea>
  </div>

  <input id="kuld" type="submit" value="Küld" class="btn btn-outline-success">
</form>

<script type="text/javascript" src="./js/kapcsolat_form_validation.js"></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3841313946045!2d19.66511171198671!3d46.89516333671399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7759d88a69%3A0xba0af93cdfb3fbe2!2zR0FNRiBUZXJtw6lzemV0LSDDqXMgTcWxc3pha2kgQWxhcHR1ZG9tw6FueWkgVGFuc3rDqWs!5e0!3m2!1shu!2shu!4v1714558478102!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
