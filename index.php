<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pokédex</title>
</head>
<body>
    <main>

        <div class="pokemon_image">
            <img src="#" alt="pokemon" class="pokemon">
        </div>
       
           
        <form class="form">
      <input
        type="search" class="search" placeholder="Nom ou Numéro" required/></form>

        <div class="big_green_box">
            <h1 class="pokemon_name"></h1>
        </div>
        <div class="big_black_box">
            <h1 class="pokemon_number"></h1>
        </div>
        <div class="buttons">
            <button class="button_prev">Précédant</button>
            <button class="button_next">Suivant</button>
        </div>

        
    </main>
    <div class="gameboy" id="GameBoy">
  
  <div class="screen-area">
    
    <div class="power">
      <div class="indicator">
        <div class="led"></div>
        <span class="arc" style="z-index:2"></span>
        <span class="arc" style="z-index:1"></span>
        <span class="arc" style="z-index:0"></span>
      </div>
      POWER
    </div>
    
    <canvas class="display" id="mainCanvas"></canvas>
    
    <div class="label">
      <div class="title">GAME BOY</div>
      <div class="subtitle">
        <span class="c">C</span><!--
     --><span class="o1">O</span><!--
     --><span class="l">L</span><!--
     --><span class="o2">O</span><!--
     --><span class="r">R</span>
      </div>
    </div>
    
  </div>
  
  <div class="nintendo">Nintendo</div>
  
  <div class="controls">
    <div class="dpad">
      <div class="up"><i class="fa fa-caret-up"></i></div>
      <div class="right"><i class="fa fa-caret-right"></i></div>
      <div class="down"><i class="fa fa-caret-down"></i></div>
      <div class="left"><i class="fa fa-caret-left"></i></div>
      <div class="middle"></div>
    </div>
    <div class="a-b">
      <div class="b">B</div>
      <div class="a">A</div>
    </div>
  </div>
  
  <div class="start-select">
    <div class="select">SELECT</div>
    <div class="start">START</div>
  </div>
  
  <div class="speaker">
    <div class="dot placeholder"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot placeholder"></div>
    
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>

    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>

    <div class="dot placeholder"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot closed"></div>
    <div class="dot open"></div>
    <div class="dot placeholder"></div>
  </div>
  
</div>

    
    <script src="js/script.js"></script>
</body>
</html>