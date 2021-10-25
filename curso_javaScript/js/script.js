let elementButton = document.querySelector('input[type="Submit"]');
let elementText = document.querySelector('#nomeid');

// elementButton.onmouseout = obrigado;
// elementButton.onmouseover = teste;

// function teste(){
//     alert('Testando ação');
// }

elementButton.onclick = obrigado;

function obrigado() {
    let texto = elementText.value;

    alert('Obrigado ' + texto + ' por testar');
}