function getQuantity(id){
    switch(id){
        case 1:
            return document.getElementById("Item1_Quantity").value;
        case 2:
            return document.getElementById("Item2_Quantity").value;
        case 3:
            return document.getElementById("Item3_Quantity").value;
    }
}


var priceArray = [0.0, 0.0, 0.0];

function calculatePrice(id){
    switch(id){
        case 1:
            priceArray[0] = getPrice(1)*getQuantity(id);
            document.getElementById("JJEC_Total").innerHTML = priceArray[0].toFixed(2);
            break;

        case 2:
            if(document.getElementById("CAL_Single").checked){
                priceArray[1] = getPrice(2)*getQuantity(id);
            }
            else { // CAL_Double
                priceArray[1] = getPrice(3)*getQuantity(id);
            }
            document.getElementById("CAL_Total").innerHTML = priceArray[1].toFixed(2);
            break;

        case 3:
            if(document.getElementById("IC_Single").checked){
                priceArray[2] = getPrice(4)*getQuantity(id);
            }
            else{ // IC_Double
                priceArray[2] = getPrice(5)*getQuantity(id);
            }

			document.getElementById("IC_Total").innerHTML = priceArray[2].toFixed(2);
            break;
    }
    calculateTotal();
}
function calculateTotal(){
    document.getElementById("totalPrice").innerHTML = (priceArray[0] + priceArray[1] + priceArray[2]).toFixed(2);
}

function getPrice(id){
	switch(id){
		case 1:
			return (parseFloat(document.getElementById("JJEC_price").textContent));
		case 2:
			return (parseFloat(document.getElementById("CALS_price").textContent));
		case 3:
			return (parseFloat(document.getElementById("CALD_price").textContent));
		case 4:
			return (parseFloat(document.getElementById("ICS_price").textContent));
		case 5:
			return (parseFloat(document.getElementById("ICD_price").textContent));
	}
}
f

function init(){
    document.getElementById("JJEC_Total").innerHTML = priceArray[0].toFixed(2);
    document.getElementById("CAL_Total").innerHTML = priceArray[0].toFixed(2);
	document.getElementById("IC_Total").innerHTML = priceArray[2].toFixed(2);

    for(i = 1; i <=3; i++){
        calculatePrice(i);
    }
    calculateTotal();
}
