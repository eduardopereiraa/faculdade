<?php
  function fCreateTableHTML() {
    $sHtmlTable = '
      <form action="">
        <div class="container-menu">
          <div class="container-title">
            <span>Calculadora</span>
          </div>
          <div class="container-options">
            <a href="#"><i class="fa fa-window-minimize" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-window-maximize" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-window-close" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="container-principal">
          <div class="container-principal-menu">
            <div class="container-principal-menu-left">
              <a href="#">
                <i class="fa fa-align-justify" aria-hidden="true"></i>
              </a>
              <span>Padrão</span>
            </div>
            <div class="container-principal-menu-right">
              <a href="#">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="container-principal-painel">
            <span id="painel">0</span>
          </div>
          <div class="container-principal-keywords">
            <table>
              <tr>
                <td>%</td>
                <td>CE</td>
                <td id="clear">C</td>
                <td>/</td>
              </tr>
              <tr>
                <td class="background-black">7</td>
                <td class="background-black">8</td>
                <td class="background-black">9</td>
                <td>x</td>
              </tr>
              <tr>
                <td class="background-black">4</td>
                <td class="background-black">5</td>
                <td class="background-black">6</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="background-black" name="one">1</td>
                <td class="background-black">2</td>
                <td class="background-black">3</td>
                <td>+</td>
              </tr>
              <tr>
                <td class="background-black">%</td>
                <td class="background-black">0</td>
                <td class="background-black">,</td>
                <td class="background-blue" id="result">=</td>
              </tr>
            </table>
          </div>
        </div>
      </form>
    ';

    return $sHtmlTable;
  }