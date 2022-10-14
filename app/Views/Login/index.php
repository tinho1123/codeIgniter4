<div class="container text-center">
  <div class="row">
    <div class="col">
      <img src='<?= base_url('assets/img/login.webp') ?>' alt='tela login' width=" 100%" />
    </div>
    <div class="col  my-auto">
      <form method="POST" action="login">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name='email' class="form-control" required />
        </div>
        <div class="mb-3">
          <label class="form-label">Senha</label>
          <input type="password" name='senha' class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary">Logar</button>
      </form>
    </div>
  </div>