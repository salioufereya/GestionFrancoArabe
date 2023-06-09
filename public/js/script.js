
let bntAdd = document.getElementById('btnAdd');
let frm = document.querySelector('#frm');
let btnClose = document.querySelector('#btnClose');
bntAdd.addEventListener('click', (e) => {
    e.preventDefault();
   
    frm.style.transform = 'translateY(10%)';
})
btnClose.addEventListener('click', (e) => {
    e.preventDefault();
    frm.style.transform = 'translateY(-550%)';
})