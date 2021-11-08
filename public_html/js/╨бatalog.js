class Сatalog {

    render(){
        let htmlCatalog = '';
        GOODS.forEach(({ name, cost, description, order, k_modes, info, availability, img }) => {
            htmlCatalog += `
                <li class="catalog_item" data-price="${cost}" data-k-modes="${k_modes}" data-n="${order}" data-name="${name}">
                    <div class="product">
                        <span class="product__image">
                                <div class="image-switch">
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img class="image-switch__pic" src="${img}" alt=""></div>
                                    </div>
                                    <div class="product-switch__item">
                                        <h3 class="product-switch__info">${info}</h3>
                                    </div>
                                    
                                </div>
                        </span>
                        <div class="product__content">
                            <h3 class="product__title">${name}</h3>
                            <p class="product__description">${description}</p>
                            <p class="product__price">${cost} ₽</p>
                        </div>
                        <footer class="product__footer">
                            <button class="btn_add_to_cart">Добавить в корзину</button>
                        </footer>
                    </div>
                
                </li>

            `;
        })
        
        const html = `
            <ul id="goods" class="catalog">
                ${htmlCatalog}
            </ul>
        `;
        ROOT_CATALOG.innerHTML = html;
    }
}

const catalogPage = new Сatalog();
catalogPage.render();


