$( document ).ready(function() {
    console.log( "Ready! Local storage number is " + localStorage.getItem("price_editable") );

    var price = $(".price_editable"),
    	meters_price = $(".result");
    	heart = $(".fa-heart");

    if (!localStorage.getItem("price_editable") || !localStorage.getItem("meters_result")){
    	price.text('1,400,000');
    	meters_price.text(calculateMetersPrice(price.text().replace(/[^0-9.]/g, "")));
    } else {
    	price.text(numberWithCommas(localStorage.getItem("price_editable")));
    	meters_price.text(numberWithCommas(localStorage.getItem("meters_result")));
    };

    price.on( "focusout", function(){
    	price_clean = parseFloat(price.text().replace(/[^0-9.]/g, ""));
    	price.text(numberWithCommas(price_clean));

    	meters_result = numberWithCommas(calculateMetersPrice(price_clean));
    	meters_price.text(meters_result);

    	localStorage.setItem("price_editable", price_clean);
    	localStorage.setItem("meters_result", meters_result);
    });

    function numberWithCommas(number) {
	    var parts = number.toString().split(".");
	    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	    return parts.join(".");
	}

	function calculateMetersPrice(price){
		meters_clean = parseFloat($(".meters").text().replace(/[^0-9.]/g, ""));
		meters_result = price / meters_clean;
		return numberWithCommas(meters_result.toFixed(2));
	}

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
    });

    if (localStorage.getItem("red_heart") == null){
        heart.css("color", "#000000");
    }

    heart.on("click", function(){
        if (localStorage.getItem("red_heart") == null){
            heart.css("color", "#ff0000");
            localStorage.setItem("red_heart", "red");
        } else {
            heart.css("color", "#000000");
            localStorage.removeItem("red_heart");
        }
        console.log(localStorage.getItem("red_heart", "red"));
    })

});