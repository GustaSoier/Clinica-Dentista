window.onscroll = function(){
    var top = window.scrollY || document.documentElement.scrollTop;
    console.log(top);
  
    if(top > 800){
      console.log("Adicionar meu menu fixo");
      document.getElementById("topoFixo").classList.add("menu-fixo")
      document.getElementById("topoFixo").classList.remove("site")
    }
  
    else{
      console.log("Remover meu menu fixo");
      document.getElementById("topoFixo").classList.remove("menu-fixo")
      document.getElementById("topoFixo").classList.add("site")
    }
}