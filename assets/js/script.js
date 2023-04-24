// =============================================stickyContactForm js

let stickyContactFormContainer = document.querySelector('.stickyContactFormContainer');
let formtoggleLable = document.querySelector('.formtoggleLable');

let contactFormToogler = [...document.querySelectorAll('.contactFormToogler')];
let contactFormTogglerIcons = [...document.querySelectorAll('.fa-info-circle')];

formtoggleLable.addEventListener('click', () => {
    togglerForm(stickyContactFormContainer, contactFormTogglerIcons);
});

contactFormToogler.forEach((item) => {
    item.addEventListener('click', () => {
        togglerForm(stickyContactFormContainer, contactFormTogglerIcons);
    })
});


function togglerForm(form, toggler) {
    stickyContactFormContainer.classList.toggle('showForm')
    toggler.forEach((element) => {
        element.classList.toggle('fa-window-close');
    })
}

// products tabs js
// tab.dataset.filter
let packagesTabs = document.querySelector('.packagesTabs');
if(packagesTabs){
    packagesTabs = [...packagesTabs.children];
}

let PackagesTabsData = [...document.querySelectorAll('.PackagesTabsData')];

if (packagesTabs) {

    packagesTabs.forEach((packagesTab) => {
        packagesTab.addEventListener('click', () => {
            let activePakcageTab = document.querySelector('.packageTab.active');
            activePakcageTab.classList.remove('active');
            packagesTab.classList.add('active');
            let dataSetVal = packagesTab.dataset.filter;
            let activepackagesTabData = document.querySelector('.PackagesTabsData.active');

            filterPackagesData(PackagesTabsData, activepackagesTabData, dataSetVal);

        })

    })

}

//  function to filter Packages Tabs Data
const filterPackagesData = (DataTabsArr, activeDataTab, dataSetVal) => {
    DataTabsArr.forEach((packagesTabData) => {

        activeDataTab.classList.remove('active');

        let filterableTab = document.querySelector(`.${dataSetVal}`);
        filterableTab.classList.add('active')
    })
}

// keywords Accordion js
let keywordAccordionHead = [...document.querySelectorAll('.keywordAccordionHead')];

keywordAccordionHead.forEach((head) => {
    head.addEventListener('click', () => {
        let accordionBody = head.nextElementSibling;
        let icon = head.querySelector('i.fa-plus');


        accordionBody.classList.toggle('showAccordionBody')
        icon.classList.toggle('fa-minus')
    })
});

// product page image Popout css
let productImgBox = [...document.querySelectorAll('.keywordAccordionBody .imgBox')];
let productImagePreviewBox = document.querySelector('.productImagePreviewBox');
let previwBoxCloseIcon = document.querySelector('.productImagePreviewBox i');

productImgBox.forEach((imgBox) => {

    imgBox.addEventListener('click', () => {
        // remove the previous image
        let popoutImgHolder = document.querySelector('.popoutImgHolder');
        if (popoutImgHolder) {
            popoutImgHolder.remove();
        }

        let imgSrc = imgBox.querySelector('img').src;

        let div = document.createElement('div');
        div.classList.add('popoutImgHolder')


        let img = document.createElement('img');
        img.src = imgSrc;

        div.appendChild(img);
        productImagePreviewBox.appendChild(div);
        productImagePreviewBox.style.display = "flex";

    })
});
if(previwBoxCloseIcon){
    previwBoxCloseIcon.addEventListener('click', () => {
        productImagePreviewBox.style.display = "none";
    })
}