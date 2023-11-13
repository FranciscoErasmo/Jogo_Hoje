<meta charset="UTF-8">
<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <html>
      <body class="center-h1">
        
       <div class="center-h1">
          <form action="{{route('store')}}"  method="POST">
              @csrf
              <h1 style="text-align: center;">Nova Equipe</h1>

         
            <h6>Modalidade<h6>
                <select class="form-control"  id="choices-button" name="modalidade" placeholder="Departure">
                  <option value="Choice 1" selected ="">Vôlei</option>
                  <option value="Choice 2">Basquete</option>
                  <option value="Choice 3">Beach Tennis</option>
                  <option value="Choice 4">Futebol</option>
                  <option value="Choice 1">Futsal</option>
                  <option value="Choice 2">Futevôlei</option>
                  <option value="Choice 3">Tênis</option>
                  <option value="Choice 4">Queimada</option>
                  <option value="Choice 2">Handebol</option>
                </select>
                
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Privado
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Público
                </label>
        
                
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Capitão/Administrador</label>
              <input type="text" name="capitao"  class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time A</label>
                <input type="text" name="timea" class="form-control">
              </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time B</label>
                <input type="text" name="timeb" class="form-control">
              </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Local</label>
              <input type="text" name="local" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Local de confraternização | Pós jogo</label>
              <input type="text" name="confrat" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Data</label>
              <input type="text" name="data" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Horário Inicial</label>
              <input type="text" name="horarioinicial" class="form-control">
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Horário de Término</label>
              <input type="text" name="horariofinal" class="form-control">
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Estou ciente de que o tempo de uso da quadra não deve ser superior a 4 horas por agendamento público, e 3 horas por agendamento privado
            </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Formar Equipe</button>
          </form>
        </div>
      </body>
    </html>
</div>
