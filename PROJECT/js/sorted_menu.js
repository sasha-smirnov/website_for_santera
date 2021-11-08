// let goods = document.querySelector('#goods');
// console.log(goods)

document.querySelector('#sort-asc').onclick = function(){
    mySort('data-price');
}
document.querySelector('#sort-desc').onclick = function(){
    mySortDesc('data-price');
}
document.querySelector('#sort-reset').onclick = function(){
    mySort('data-n');
}
document.querySelector('#one-mode').onclick = function(){
    filter(1);
}
document.querySelector('#two-modes').onclick = function(){
    filter(2);
}
document.querySelector('#three-modes').onclick = function(){
    filter(3);
}
document.querySelector('#five-modes').onclick = function(){
    filter(5);
}
document.querySelector('#filter-reset').onclick = filterReset;


function mySort(sortType){
    let goods = document.querySelector('#goods');
    for (let i = 0; i < goods.children.length; i++){
        for (let j = i; j < goods.children.length; j++){
            if (+goods.children[i].getAttribute(sortType) > +goods.children[j].getAttribute(sortType)){
                replacedNode = goods.replaceChild(goods.children[j], goods.children[i]);
                insertAfter(replacedNode, goods.children[i])
            }
        }
    }
}

function mySortDesc(sortType){
    let goods = document.querySelector('#goods');
    for (let i = 0; i < goods.children.length; i++){
        for (let j = i; j < goods.children.length; j++){
            if (+goods.children[i].getAttribute(sortType) < +goods.children[j].getAttribute(sortType)){
                replacedNode = goods.replaceChild(goods.children[j], goods.children[i]);
                insertAfter(replacedNode, goods.children[i])
            }
        }
    }
}
            

function insertAfter(elem, refElem){
    return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}

function filter(category){
    let goods = document.querySelector('#goods');
    for (let i = 0; i < goods.children.length; i++){
        if (+goods.children[i].getAttribute('data-k-modes') == category){
            goods.children[i].classList.remove('hide')
        }
        else{
            goods.children[i].classList.add('hide')
        }
    }
}

function filterReset(){
    let goods = document.querySelector('#goods');
    for (let i = 0; i < goods.children.length; i++){
        goods.children[i].classList.remove('hide')
        
    }
}