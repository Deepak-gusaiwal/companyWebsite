// -=================================================data Tabs js
let tabs = [...document.querySelectorAll('.tab')];
let tabsDataContiner = document.querySelector('.tabsDataContiner');
let Data = null;
if (tabsDataContiner) {
    Data = [...tabsDataContiner.children];
}

tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        let activeTab = document.querySelector('.tabGroup .active');
        activeTab.classList.remove('active');

        tab.classList.add('active');
        let filterVal = tab.dataset.filter

        // filtering the Data
        filterData(Data, filterVal);
    })
});

const filterData = (items, filterVal) => {
    items.forEach((item) => {
        if (item.classList.contains(filterVal)) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');

        }
    })
}

// =============================================stickyContactForm js

let stickyContactFormContainer = document.querySelector('.stickyContactFormContainer');
let formtoggleLable = document.querySelector('.formtoggleLable');
let faCheckSquare = document.querySelector('.fa-check-square');

let contactFormToogler = [...document.querySelectorAll('.contactFormToogler')];
let contactFormTogglerIcon = document.querySelector('.fa-info-circle');

formtoggleLable.addEventListener('click', () => {
    togglerForm(stickyContactFormContainer,faCheckSquare,contactFormTogglerIcon);
});

contactFormToogler.forEach((item)=>{
    item.addEventListener('click',()=>{
        togglerForm(stickyContactFormContainer,faCheckSquare,contactFormTogglerIcon);
    })
});


function togglerForm(form,icon,contactFormTogglerIcon) {
        stickyContactFormContainer.classList.toggle('showForm')
        faCheckSquare.classList.toggle('fa-window-close')
        contactFormTogglerIcon.classList.toggle('fa-window-close')
}

