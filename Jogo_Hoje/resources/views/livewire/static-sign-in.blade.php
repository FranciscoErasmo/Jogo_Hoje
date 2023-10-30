
<div class="container my-auto mt-5">
                <div class="row signin-margin">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                           <br>
                           <h1 style="text-align:center">Quadra Hoje</h1>
                           <br>
                           
                            <div class="card-body">
                                <form role="form" class="text-start">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Lembrar mais tarde</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Não tem uma conta?
                                        <a href="{{ route('static-sign-up') }}"
                                            class="text-primary text-gradient font-weight-bold">Criar conta</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>