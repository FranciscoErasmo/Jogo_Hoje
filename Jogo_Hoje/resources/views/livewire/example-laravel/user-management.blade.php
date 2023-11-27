
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4"> 
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong>CRIE UMA EQUIPE E COMPARTILHE COM SEUS AMIGOS!</strong>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{route('user-insert')}}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Nova equipe</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    
                                  @foreach ($equipe as $equipe)
        
                                  <div>
                                      <div class="col-md-4 mb-4">
                                        <div class="card shadow-lg">
                                          <br>
                              <div style="position:absolute; left:76%; top:18%">
                              
                                <button type="button" class="btn btn-block btn-light mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Inserir</button>
                              </div>
                              

                              <div style="position:absolute; left:40%; top:18%">
                              
                                <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Integrantes" 
                                data-container="body" data-animation="true">Time A</button>
                              </div>
                              <div style="position:absolute; left:58%; top:18%">

                              <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Integrantes" 
                              data-container="body" data-animation="true">Time B</button>
                            </div>
                                          <div style="width: 65% ;position:absolute; left:30%; top:6%">
                                          <span class="badge rounded-pill bg-light text-dark w-30 mt-n0">{{$equipe->status}}</span>
                                          </div>
                                          <div style="width: 65% ;position:absolute; left:54%; top:6%">
                                            <span class="badge rounded-pill bg-light text-dark w-30 mt-n0">{{$equipe->modalidade}}</span>
                                          </div>
                                        <br>
                                        <br>
                              
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
                                    
                                          
                                            <a href="{{route('equipes-editar',$equipe->id)}}"> <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">Editar</button></a>
                                            <a href="{{route('equipe.destroy',$equipe->id)}}"> <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">Excluir</button></a>

                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                        </div>
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h5 class="">Insira os jogadores</h5>
                                    <p class="mb-0">Escolha um time e insira o nome do jogador</p>
                                  </div>
                                  <div class="card-body">
                                    <form role="form text-left">
                                      <select class="form-control" name="choices-button" id="choices-button" placeholder="Departure">
                                        <option value="Choice 1" selected="">Time A</option>
                                        <option value="Choice 2">Time B</option>
                                      </select>
                                      <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Nome do Jogador</label>
                                        <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                                      </div>
 
                                      <div class="text-center">
                                        <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Enviar</button>
                                      </div>
                                    </form>
                                  </div>

                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
