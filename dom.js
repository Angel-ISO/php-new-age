
const checkboxes = document.querySelectorAll('.valores');
const mensajeDiv = document.querySelector('.lista');

for (let i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener('change', checkConvocatoria);
}
//casi no me sale xD
//console.log(checkboxes)

function checkConvocatoria() {
  let contador = 0;
  
  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      contador++;
    }
  }
  
  if (contador == 2 || contador ==3) {
    mensajeDiv.innerHTML = /*html*/`
    <p><img class="imagenC" src="/media/logoWhite.png"><strong>dice:</strong> eres exelente para apolo!</p>
    `;
    mensajeDiv.style.display = 'block';
  } else if (contador == 4 || contador == 5) {
    mensajeDiv.innerHTML = /*html*/`
    <p><img class="imagenC"  src="/media/logoWhite.png"><strong>dice: </strong> estarias perfecto en artemis!</p>
    `;
  } else if (contador >=6){
    mensajeDiv.innerHTML = /*html*/`
    <p><img class="imagenC"  src="/media/logoWhite.png">  <strong>   dice: </strong> wow! sin dudas debes estar en  sputnik!</p>
    `;
  }
  else {
    mensajeDiv.style.display = 'none';
  }
}




