@include('layouts.header')

<h2 class="col-10 mx-auto">Formulaire de connexion</h2>
<form class="col-10 mx-auto" method="post" action="{{ route('connexionPost')}}">

  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" for="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input name="password" type="password" class="form-control" for="password" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

@include('layouts.footer')