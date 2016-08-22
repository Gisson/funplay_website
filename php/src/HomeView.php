<?php

require_once("View.php");

class HomeView extends View {

  public function show(){
    $html = parent::showTop();
    $html .= $this->getContent();
    $html .= parent::showBottom();
    return $html;

  }
  public function getContent(){
    $html = "";
    $content = "";
    $content .= parent::createImg('fully', 'images/yi_kata.gif', null);
    $content .= parent::createDiv('subtitles', parent::createSpan(null,"Funplay! Junta-te a nós!",'gifLetters'), null);
    $div = parent::createDiv('', $content, 'header_background');
    $html .= $div;
    /* Until here its just the gif and the letters within */
    $content = "";
    $div = "";

    $div .= parent::createHeader( 'card-title', "Counter-strike:Global offensive", null, 4);
    $div .= parent::createParagraph( 'card-text', "Servidores(os tipos?) e equipas que estão constantemente a recrutar!", null);
    $div .= parent::createDiv( 'card-block', $div, null);


    $content .= parent::createImg( 'card-img-top', 'http://cdn.akamai.steamstatic.com/steam/apps/730/header.jpg?t=1452221296', null);
    $content .= parent::createDiv( 'card', $div, null);
    $content = parent::createDiv( 'card-columns', $content, null);
    $html .=$content;
    return $html;
  }


/*<
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="http://cdn.akamai.steamstatic.com/steam/apps/730/header.jpg?t=1452221296" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Counter-strike:Global offensive</h4>
            <p class="card-text">Servidores(os tipos?) e equipas que estão constantemente a recrutar!</p>
  </div>
  </div>

  <div class="card">
  <img class="card-img-top" src="images/leagueolegends.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">League of legends</h4>
    <p class="card-text">Custom games entre membros. Equipas a recrutar. Pessoas à procura de parceiros para ranked!</p>
  </div>
  </div>

  <div class="card">
  <img class="card-img-top" src="images/RL.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Rocket League</h4>
    <p class="card-text">???????????????????????????????????????????????????????????????????????????????</p>
  </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="images/hearthstone.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Hearthstone</h4>
    <p class="card-text">Encontra aqui adversários à tua altura!</p>
  </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="images/teamspeak.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Teamspeak3</h4>
    <p class="card-text">Servidor teamspeak sempre com muita gente e salas de música. Oferta de sala permanente para a tua equipa!</p>
  </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="images/osu.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Osu!</h4>
    <p class="card-text">Encontra parceiros e adversários.</p>
  </div>
  </div>*/
}







 ?>
