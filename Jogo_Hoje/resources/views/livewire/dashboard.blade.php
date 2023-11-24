<!DOCTYPE html>
<html lang="en">
<tbody>
    @foreach ($equipe as $equipe)
        
    <div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <br>
<div style="position:absolute; left:80%; top:5%">

  <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Integrantes" 
  data-container="body" data-animation="true">Equipe 2</button>
</div>



<div style="position:absolute; left:60%; top:5%">

  <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Integrantes" 
  data-container="body" data-animation="true">Equipe 1</button>
</div>
            <div style="width: 65% ;position:absolute; left:10%; top:6%">
            <span class="badge rounded-pill bg-light text-dark w-30 mt-n0">{{$equipe->status}}</span>
            </div>
            <div style="width: 65% ;position:absolute; left:34%; top:6%">
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
      
            
              <a href="{{route('equipes-editar',$equipe->id)}}"> <button type="submit" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">Inscrever-se</button></a>
          
              </a>
            </div>
          </div>
        </div>
        @endforeach
    </tbody>
</table>