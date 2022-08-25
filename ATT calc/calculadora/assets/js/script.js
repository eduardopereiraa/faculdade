let oColunas = document.querySelectorAll('td')
    , oPainel = document.querySelector('#painel')
    , oClear = document.querySelector('#clear')
    , oResult = document.querySelector('#result')
    , sOperador = ''

const aOperadores = [
    'x'
  , '/'
  , '-'
  , '+'
]

oColunas.forEach(element => {
  element.addEventListener('click', () => {
    if (oPainel.innerText == 0) {
      oPainel.innerHTML = element.innerText
    } else if (element.innerText != '=') {
      oPainel.innerHTML += element.innerText
    }

    if (element.innerText == 'C') {
      oPainel.innerText = 0
    }

    if (element.innerText == '=') {
      let sOperador = ''

      aOperadores.forEach(element => {
        if (element = oPainel.innerText.indexOf('x') != -1) {
          sOperador = oPainel.innerText.substr(oPainel.innerText.indexOf('x'), 1)
        } else if (element = oPainel.innerText.indexOf('/') != -1) {
          sOperador = oPainel.innerText.substr(oPainel.innerText.indexOf('/'), 1)
        } else if (element = oPainel.innerText.indexOf('-') != -1) {
          sOperador = oPainel.innerText.substr(oPainel.innerText.indexOf('-'), 1)
        } else if (element = oPainel.innerText.indexOf('+') != -1) {
          sOperador = oPainel.innerText.substr(oPainel.innerText.indexOf('+'), 1)
        }
      });

      let iLength = oPainel.innerText.length
      let sFirstOp = oPainel.innerText.slice(0, oPainel.innerText.indexOf(sOperador));
      let sSecondOp = oPainel.innerText.slice(oPainel.innerText.indexOf(sOperador + 1), iLength);
      let sResultado = 0;

      if (sOperador == 'x') {
        sResultado = parseFloat(sFirstOp) * parseFloat(sSecondOp)
      } else if (sOperador == '/') {
        sResultado = parseFloat(sFirstOp) / parseFloat(sSecondOp)
      } else if (sOperador == '-') {
        sResultado = parseFloat(sFirstOp) - parseFloat(sSecondOp)
      } else if (sOperador == '+') {
        sResultado = parseFloat(sFirstOp) + parseFloat(sSecondOp)
      }

      oPainel.innerText = sResultado;
    }
  })
});