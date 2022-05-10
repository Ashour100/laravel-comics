require('./bootstrap');
let loadB=document.getElementById('load');
let moreContainer=document.getElementById('moreContainer');
loadB.addEventListener("click",function(){
    loadB.classList.add('d-none');
    moreContainer.classList.remove('d-none');
});
console.warn('It seems to work');