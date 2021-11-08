;(function() {
    ymaps.ready(function () {
        var myMap = new ymaps.Map('ymap', {
                center: [55.734618,37.733931],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),
    
            // Creating a content layout.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),
    
            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                
                balloonContent: 'Москва, шоссе Фрезер, 19 стр. 3'
            }, {
                /**
                 * Options.
                 * You must specify this type of layout.
                 */
                iconLayout: 'default#image',
                // Custom image for the placemark icon.
                iconImageHref: '../img/svg/logotype 1.svg',
                // The size of the placemark.
                iconImageSize: [30, 42],
                /**
                 * The offset of the upper left corner of the icon relative
                 * to its "tail" (the anchor point).
                 */
                iconImageOffset: [-5, -38]
            } );
    
        myMap.geoObjects.add(myPlacemark)
    });
    
})();