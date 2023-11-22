
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4"> 
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Veja as partidas que você criou e/ou se inscreveu!</strong>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{route('user-insert')}}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Nova equipe</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    
                                   <tbody>
                                    @foreach ($equipe as $equipe)
                                        
                                    <div>
                                        <div class="col-md-4 mb-4">
                                          <div class="card shadow-lg">
                                            <span class="badge rounded-pill bg-light text-dark w-30 mt-n0 mx-auto">{{$equipe->status}}</span>
                                            <div class="card-header text-center pt-4 pb-3">
                                              <h1 class="font-weight-bold mt-2">
                                                <small class="text-lg mb-auto"><h1 class="text-lg" >{{$equipe->modalidade}}</h1></small>
                                              </h1>
                                            </div>
                                            <div class="card-body text-lg-start text-center pt-0">
                                              <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                                <h1 class="text-lg"> Capitão: </h1>
                                                <span class="ps-3">{{$equipe->capitao}}</span>
                                              </div>
                                      
                                              <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                                <h1 class="text-lg"> Data: </h1>
                                                <span class="ps-3">{{$equipe->data}}</span>
                                              </div>
                                      
                                              <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                                <h1 class="text-lg"> Local: </h1>
                                                <span class="ps-3">{{$equipe->local}}</span>
                                              </div>
                                      
                                              <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                                <h1 class="text-lg"> Início: </h1>
                                                <span class="ps-3">{{$equipe->horainicial}}</span>
                                              </div>
                                      
                                              <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                                <h1 class="text-lg"> Fim: </h1>
                                                <span class="ps-3">{{$equipe->horafinal}}</span>
                                              </div>
                                      
                                      
                                              <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                                Editar
                                                <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
<<<<<<< HEAD
                                            <form action="{{ route('equipe.destroy', $equipe->id) }}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" onclick="return confirm('Tem certeza que deseja excluir este local?')">Excluir</button>
                                            
                                            </form>
                                                
=======
                                            
                                            <a href="javascript:;" class="btn btn-icon bg-gradient-red d-lg-block mt-3 mb-0">                                                    Excluir
                                                <i class="fas fa-arrow-right ms-1"></i>
>>>>>>> parent of 00de784 (uytrew)
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
