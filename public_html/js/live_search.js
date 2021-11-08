document.querySelector('#catalog_items').oninput = function(){
    let val = this.value.trim();
    let goods = document.querySelector('#goods');
    if (val != ''){
        for (let i = 0; i < goods.children.length; i++){
            if (goods.children[i].getAttribute('data-name').search(val) == -1){
                goods.children[i].classList.add('hide');
            }
            else{
                goods.children[i].classList.remove('hide');

            }
        }
        
    }
    else{
        for (let i = 0; i < goods.children.length; i++){
            
            goods.children[i].classList.remove('hide');
            
        }

    }
}


