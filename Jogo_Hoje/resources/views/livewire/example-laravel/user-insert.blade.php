<style>
  body.center-form {
    min-height: 100vh;
  }

  div.center-form {
    position: relative;
    min-height: 100vh;
  }

  div.center-form > form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
</style>
<body class="center-form">
<div class="center-form">
  <form>
    <body onload='window.history.back(http://127.0.0.1:8000/user-management);'>

<br>
<br>
<h1 class="display-1">Nova Equipe</h1>
<h3><div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Privado</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Público</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">Líder</label>
</div>
<div class="form-floating">
  <input type=hour class="form-control" id="floatingPassword" placeholder="">
  <label for="floatingPassword">Dia do jogo</label>
</div>
<div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Selecione o esporte</option>
    <option value="1">Basquete</option>
    <option value="2">Vôlei</option>
    <option value="2">Vôlei de Praia</option>
    <option value="3">Handebol</option>
    <option value="4">Futebol</option>
    <option value="5">Futsal</option>
    <option value="6">Futevôlei</option>
    <option value="2">Beach Tennis</option>
    <option value="7">Tênis</option>

  </select>
  <label for="floatingSelect">Modalidades</label>
</div>
<div class="form-floating">
  <input type=text class="form-control" id="floatingPassword" placeholder="">
  <label for="floatingPassword">Jogadores</label>
</div>
<div class="form-floating">
  <input type=text class="form-control" id="floatingPassword" placeholder="">
  <label for="floatingPassword">Horário</label>
</div>
<div class="form-floating">
  <input type=text class="form-control" id="floatingPassword" placeholder="">
  <label for="floatingPassword">Localização</label>
</div>
<br>
<button type="button" class="btn btn-success">Criar Equipe</button>
  </form>
</h3>
</div>
</body>
</html>
