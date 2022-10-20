  <main class="main-content  mt-0">
    <section>
      <form action="/login" method="POST">
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <div class="card card-plain">
                  <div class="card-header pb-0 text-start">
                    <h4 class="font-weight-bolder">Login</h4>
                    <p class="mb-0">Entre com seu email e senha para logar</p>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="login">
                      <div class="mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" name="email" id="email">
                      </div>
                      <div class="mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Senha" name="senha" id="senha">
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Lembrar-me</label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Logar</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <?php if (isset($_SESSION['error'])) : ?>
                      <p class="text-danger"><?= $_SESSION['error'] ?></p>
                    <?php endif ?>
                    <p class="mb-4 text-sm mx-auto">
                      Não tem conta?
                      <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Inscreva-se</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?= base_url('assets/img/curved-images/curved-6.jpg') ?>');
          background-size: cover;">
                  <span class="mask bg-gradient-primary opacity-6"></span>
                  <h4 class="mt-5 text-white font-weight-bolder position-relative">Somos o futuro banco</h4>
                  <p class="text-white position-relative">Que fará todo cuidado com você e com seu dinheiro</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
  </main>