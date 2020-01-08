@include('layouts.header')

<h2 class="col-10 mx-auto">Formulaire de connexion</h2>
<form class="col-10 mx-auto" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

@include('layouts.footer')