
            <div class="container my-auto mt-5">
                <div class="row signin-margin">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                           <br>
                           <h1 style="text-align:center">Quadra Hoje</h1>
                           <br>
                           
                            <div class="card-body">
                                <form wire:submit.prevent='store'>
                                    @if (Session::has('status'))
                                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('status') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="input-group input-group-outline mt-3 @if(strlen($email ?? '') > 0) is-filled @endif">
                                        <label class="form-label">Email</label>
                                        <input wire:model='email' type="email" class="form-control">
                                    </div>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <div class="input-group input-group-outline mt-3 @if(strlen($password ?? '') > 0) is-filled @endif">
                                        <label class="form-label">Senha</label>
                                        <input wire:model="password" type="password" class="form-control"
                                             >
                                    </div>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="form-check form-switch d-flex align-items-center my-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Lembrar mais tarde</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Não tem uma conta?
                                        <a href="{{ route('register') }}"
                                            class="text-primary text-gradient font-weight-bold">criar conta</a>
                                    </p>
                                    <p class="text-sm text-center">
                                        Esqueceu sua senha? Redefinir sua senha
                                        <a href="{{ route('password.forgot') }}"
                                            class="text-primary text-gradient font-weight-bold">aqui</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>