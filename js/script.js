// window.onscroll = function(){
//     var top = window.scrollY || document.documentElement.scrollTop;
//     console.log(top);
  
//     if(top > 800){
//       console.log("Adicionar meu menu fixo");
//       document.getElementById("topoFixo").classList.add("menu-fixo")
//     }
  
//     else{
//       console.log("Remover meu menu fixo");
//       document.getElementById("topoFixo").classList.remove("menu-fixo")
//     }
// }

// aqui é para dar uma função ao clicar no menu mobile
document.querySelector(".menu-abrir").onclick = function () {
    document.documentElement.classList.add("menu-ativo");
  }
  
  document.querySelector(".menu-fechar").onclick = function () {
    document.documentElement.classList.remove("menu-ativo")
  }

  
// criando a função para enviar no whatsapp
function linkWhats(){
  var numFone = '5511951694143'
  window.open('https://api.whatsapp.com/send?phone=' + numFone)
}



    document.querySelector('.seta-abaixo a').addEventListener('click', function (e) {
        e.preventDefault(); // Impede o comportamento padrão do link

        const targetSection = document.querySelector('#sobre');
        const targetSectionPosition = targetSection.offsetTop; // Posição da próxima seção

        window.scrollTo({
            top: targetSectionPosition,
            behavior: 'smooth' // Rola suavemente
        });
    });
