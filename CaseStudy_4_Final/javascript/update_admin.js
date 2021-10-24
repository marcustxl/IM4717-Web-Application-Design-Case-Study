function editPrice(id){
    switch(id){
        case 1:
            if (document.getElementById("JJ_ckb").checked) {
			    document.getElementById("JJEC_box").disabled= false;
            }
            else {
                document.getElementById("JJEC_box").disabled= true;
            }
            break;

        case 2:
            if (document.getElementById("CAL_ckb").checked) {
			    document.getElementById("CALS_box").disabled= false;
			    document.getElementById("CALD_box").disabled= false;
            }
            else {
                document.getElementById("CALS_box").disabled= true;
                document.getElementById("CALD_box").disabled= true;
            }
            break;

        case 3:
            if (document.getElementById("IC_ckb").checked) {
			    document.getElementById("ICS_box").disabled= false;
			    document.getElementById("ICD_box").disabled= false;
            }
            else {
			    document.getElementById("ICS_box").disabled= true;
			    document.getElementById("ICD_box").disabled= true;
            }
            break;
    }
}
