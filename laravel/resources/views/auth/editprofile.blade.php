<div class="row justify-content-center">
    <form class="mt-10 mb-10 col-6" action="/editprofile" methode="post">
    <h1>Modification du mot de passe</h1>
    {{ csfr_field() }}
    <div class="mb-3">
      <label for="exampleinputpassword1" class="from-label">New password</label>    
    </div>
    </form>
</div>