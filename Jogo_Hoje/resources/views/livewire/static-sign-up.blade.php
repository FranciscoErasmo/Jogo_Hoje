<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                        </div>
                    </div>
                    <div
                        class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Criar Conta</h4>
                                <p class="mb-0">Insira seu nome, email e senha para registrar</p>
                            </div>
                            <div class="card-body">
                                <form action="{{route('criar-conta')}}" method="POST">
                                    @csrf
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Nome</label>
                                        <input wire:model="name" type="text" class="form-control" 
                                        >
                                    </div>
                                   

                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Email</label>
                                        <input wire:model="email" type="email"  class="form-control"
                                             >
                                    </div>
                                  

                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Senha</label>
                                        <input wire:model="password" type="password" class="form-control" >
                                    </div>
                                   
                                    <div class="form-check form-check-info text-start ps-0 mt-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Eu concordo com os <a href="javascript:;"
                                                class="text-dark font-weight-bolder">Termos e Condições</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Registrar-se</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Já tem uma conta?
                                    <a href=""
                                        class="text-primary text-gradient font-weight-bold">Entrar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>