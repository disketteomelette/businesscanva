<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="50" height="50" class="mr-2" alt="Logo">
    <b><?php printFileContent("empresa.dat"); ?></b> Business Model Canva
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"> 
     <button class="btn btn-light" id="increaseBtn">+</button> <button class="btn btn-light" id="decreaseBtn">-</button>
    </ul>
  </div>
</nav>
