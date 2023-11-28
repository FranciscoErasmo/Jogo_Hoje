<!DOCTYPE html>
<html lang="en">
<tbody>
    @foreach ($equipe as $equipe)
        
    <div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <br>
<div style="position:absolute; left:80%; top:5%">

  <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$equipe->jogadores_timeB}}" 
  data-container="body" data-animation="true">Time B</button>
</div>



<div style="position:absolute; left:60%; top:5%">

  <button type="button" class="btn bg-gradient-secondary btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$equipe->jogadores_timeA}}" 
  data-container="body" data-animation="true">Time A</button>
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
      
            
              <button type="button" class="btn btn-block btn-light mb-3" data-bs-toggle="modal" data-bs-target="#modal-form" data-id="{{$equipe->id}}">Inscrever-se</button>
            </div>
              
              </a>
            </div>
          </div>
        </div>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
  <div class="modal-content">
    <div class="modal-body p-0">
      <div class="card card-plain">
        <div class="card-header pb-0 text-left">
          <h5 class="">Insira os jogadores</h5>
          <p id="modal-id-placeholder" class="mb-0">Escolha um time e insira o nome do jogador </p>
        </div>
        <div class="card-body">
          <form role="form text-left" action="{{route('inserir-jogador')}}" method="POST">
            @csrf
          
            <input type="hidden" class="form-control" name="id_jogo" value="{{$equipe->id}}">
            <br>
            <select class="form-control" name="time" id="choices-button" placeholder="Departure">
              <option value="Time A" selected="">Time A</option>
              <option value="Time B">Time B</option>
            </select>
            <div class="input-group input-group-outline my-3">
             
              <label class="form-label">Nome do Jogador</label>
        
              <input type="text" class="form-control" name="nome_do_jogador" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      <script>
  $('#modal-form').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botão que acionou o modal
    var id = button.data('id'); // Extrai a informação do atributo data-id

    var modal = $(this);
    var originalText = 'Escolha um time e insira o nome do jogador ';
    modal.find('#modal-id-placeholder').text(originalText + 'ID: ' + id);
  });
</script>
