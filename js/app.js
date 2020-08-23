addEventListener('DOMContentLoaded', ()=>{
const btn_menu = document.querySelector('.btn_menu')

if (btn_menu) {
    btn_menu.addEventListener('click', () => {
        const menu_itens = document.querySelector('.menu_items')
        menu_itens.classList.toggle('show')
    })
}


})