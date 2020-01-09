@include('layouts.header')

<h2 class="col-10 mx-auto">Formulaire de connexion</h2>
<form class="col-10 mx-auto" method="post">
  <div class="form-group">
    <label for="firstname">Nom</label>
    <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
  <div class="form-group">
    <label for="lastname">Prénom</label>
    <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input name="password" type="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirmation mot de passe</label>
    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
  </div>

  
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

@include('layouts.footer')