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
      
            
              <a href="{{route('equipes-editar',$equipe->id)}}"> <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">Editar</button></a>
          

              <a href="{{route('equipe.destroy',$equipe->id)}}"> <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" onclick="return confirm('Tem certeza que deseja excluir este local?')">Excluir</button>

              </a>
            </div>
          </div>
        </div>
        @endforeach
    </tbody>
</table>