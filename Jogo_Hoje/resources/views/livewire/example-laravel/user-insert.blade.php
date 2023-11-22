
<div class="container-fluid py-4"> 
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <html>
      <body class="center-h1">
        
       <div class="center-h1">
          <form action="{{route('criar-conta')}}"  method="POST">
              @csrf
              <h1 style="text-align: center;">Nova Equipe</h1>

         
              <label class="form-label"> <h4>Modalidade<h4>
                <select name= "modalidade" id="inputState" class="form-control" data-gtm-form-interact-field-id="0" required>
                  <option value="Vôlei" selected ="">Vôlei</option>
                  <option value="Basquete">Basquete</option>
                  <option value="Beach tennis">Beach Tennis</option>
                  <option value="Futebol">Futebol</option>
                  <option value="Futsal">Futsal</option>
                  <option value="Futevôlei">Futevôlei</option>
                  <option value="Tênis">Tênis</option>
                  <option value="Queimada">Queimada</option>
                  <option value="Handebol">Handebol</option>
                </select>
                                
                
                  <label class="form-label"> <h4>Status<h4>
                    <select name= "status" id="inputState" class="form-control" data-gtm-form-interact-field-id="0" required><option selected="selected">Público </option> <option>Privado</option></select>
        
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Capitão/Administrador</label>
              <input type="text" name="capitao"  class="form-control" required>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time A</label>
                <input type="text" name="timea" class="form-control" required>
              </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time B</label>
                <input type="text" name="timeb" class="form-control" required>
              </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Local</label>
              <input type="text" name="local" class="form-control" required>
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Local de confraternização | Pós jogo</label>
              <input type="text" name="confrat" class="form-control">
            </div>
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>
            <div class="input-group input-group-outline my-3"> 

             <label for="hora">Hora inicial:</label>
        <input type="time" id="hora" name="horainicial" required>

             <label for="hora">Hora de término:</label>
        <input type="time" id="hora" name="horafinal" required>

            <div class="form-check">
              <input class="form-check-input" name="checkbox" type="checkbox" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">Estou ciente de que o tempo de uso da quadra não deve ser superior a 4 horas por agendamento público, e 3 horas por agendamento privado
            </label>
                
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Formar Equipe</button>
          </form>
        </div>
      </body>
    </html>
</div>
