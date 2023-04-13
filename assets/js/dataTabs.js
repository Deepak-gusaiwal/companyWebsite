let tabs = [...document.querySelectorAll('.tab')];
let tabsDataContiner = document.querySelector('.tabsDataContiner');
let Data = null;
if (tabsDataContiner){
     Data = [...tabsDataContiner.children];
}

tabs.forEach((tab)=>{
    tab.addEventListener('click',()=>{
        let activeTab = document.querySelector('.tabGroup .active');
        activeTab.classList.remove('active');

        tab.classList.add('active');
        let filterVal = tab.dataset.filter

        // filtering the Data
        filterData(Data,filterVal);
    })
});

const filterData = (items, filterVal)=>{
    items.forEach((item)=>{
            if(item.classList.contains(filterVal)){
                item.classList.add('active');
            }else{
                item.classList.remove('active');

            }
        })
}