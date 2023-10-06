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

function linkWhats(){
  var numFone = '5511951694143'
  window.open('https://api.whatsapp.com/send?phone=' + numFone)
}