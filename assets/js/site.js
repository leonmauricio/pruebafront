$( document ).ready(function() {
    console.log( "Ready! Local storage number is " + localStorage.getItem("price_editable") );

    var price = $(".price_editable"),
    	meters_price = $(".result"),
        price_storage = localStorage.getItem("price_editable"),
        meters_storage = localStorage.getItem("meters_result"),
        heart = $(".fa-heart"),
        isFavourite = localStorage.getItem('isFavourite');

    if (!price_storage || !meters_storage){
    	price.text('1,400,000');
    	meters_price.text(calculateMetersPrice(price.text().replace(/[^0-9.]/g, "")));
    } else {
    	price.text(numberWithCommas(price_storage));
    	meters_price.text(numberWithCommas(meters_storage));
    };

    price.on( "focusout", function(){
    	var price_clean = parseFloat(price.text().replace(/[^0-9.]/g, ""));
    	price.text(numberWithCommas(price_clean));

    	var meters_result = numberWithCommas(calculateMetersPrice(price_clean));
    	meters_price.text(meters_result);

    	localStorage.setItem("price_editable", price_clean);
        localStorage.setItem("meters_result", meters_result);
    	localStorage.removeItem("favourite");
    });


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
    });

    if (isFavourite) {
        heart.css("color", "#ff0000");
    }

    heart.on('click', function (e) {
        if (isFavourite) {
            heart.css("color", "#000000");
            isFavourite = false;
            localStorage.removeItem('isFavourite');
        } else {
            heart.css("color", "#ff0000");
            isFavourite = true;
            localStorage.setItem('isFavourite', 1);
        }
    });

    

});

function numberWithCommas(number) {
    var parts = number.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

function calculateMetersPrice(price){
	var meters_clean = parseFloat($(".meters").text().replace(/[^0-9.]/g, ""));
	var meters_result = price / meters_clean;
	return numberWithCommas(meters_result.toFixed(2));
}