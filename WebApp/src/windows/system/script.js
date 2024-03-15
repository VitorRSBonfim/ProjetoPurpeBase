var menuItem = document.querySelectorAll('.menu-item');

function selcionarLink() {
    
    menuItem.forEach((item) =>

        item.classList.remove('ativo')

    )
    this.classList.add('ativo')

}

menuItem.forEach((item) =>

    item.addEventListener('click', selcionarLink)

)

var btn_opnn = document.querySelector('#btn-opnn');
var menu = document.querySelector('.menu-lateral')

btn_opnn.addEventListener('click', function(){
    menu.classList.toggle('open')
    
})
