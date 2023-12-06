let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})


document.querySelector('.seta-abaixo a').addEventListener('click', function (e) {
    e.preventDefault(); // Impede o comportamento padrão do link

    const targetSection = document.querySelector('#sobre');
    const targetSectionPosition = targetSection.offsetTop; // Posição da próxima seção

    window.scrollTo({
        top: targetSectionPosition,
        behavior: 'smooth' // Rola suavemente
    });
});
