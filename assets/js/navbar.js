let subMenu = [...document.querySelectorAll('.subMenu')];

subMenu.forEach((menu) => {

    menu.addEventListener('click', () => {
        let activeSubMenu = document.querySelector('.subMenuList.acitveSubMenu');
        if(activeSubMenu){
            activeSubMenu.classList.remove('acitveSubMenu')
             // remove active color to span
        // let spanOld = activeSubMenu.previousElementSibling;
        // spanOld.style.color = "black";
        }
       

        let currentSubMenuList = menu.lastElementChild;
        currentSubMenuList.classList.add('acitveSubMenu');
        // add active color to span
        // let span = menu.firstElementChild;
        // span.style.color = "var(--brandColor)";
    })
})

