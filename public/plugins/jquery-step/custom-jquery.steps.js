// $("#example-basic").steps({
//     headerTag: "h3",
//     bodyTag: "section",
//     transitionEffect: "slideLeft",
//     autoFocus: true,
//     cssClass: 'pill wizard'
// });
$("#circle-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    cssClass: 'circle wizard',

    // Triggered when clicking the Previous/Next buttons
    onStepChanging: function(e, currentIndex, newIndex) {
        console.log(currentIndex, newIndex);
        return validateForm(currentIndex);
    },
});


function validateForm(currentIndex)
{
    //Or switch case
    if ( currentIndex == 0 ) {
        console.log(validatePage1());
        let s_comp = document.forms["shipmentForm"]["s_company"].value;
        let s_name = document.forms["shipmentForm"]["s_name"].value;
        let s_country = document.forms["shipmentForm"]["s_country"].value;
        let s_address = document.forms["shipmentForm"]["s_address"].value;
        let s_state = document.forms["shipmentForm"]["s_state"].value;
        let city = document.forms["shipmentForm"]["s_city"].value;
        let s_zip = document.forms["shipmentForm"]["s_zipcode"].value;
        let s_nid = document.forms["shipmentForm"]["s_nidorpp"].value;
        let s_tele = document.forms["shipmentForm"]["s_telephone"].value;
        let s_mob = document.forms["shipmentForm"]["s_mobile"].value;
        document.getElementById("inv_s_com").innerHTML = 'Company : ' + s_comp;
        document.getElementById("inv_s_name").innerHTML = "Sender's Name : " + s_name;
        document.getElementById("inv_s_address").innerHTML = 'Address  ' + s_address;
        document.getElementById("inv_s_country").innerHTML = 'Country : ' + s_country;
        document.getElementById("inv_s_state").innerHTML = 'State/Provine : ' + s_state;
        document.getElementById("inv_s_city").innerHTML = 'City :' + city;
        document.getElementById("inv_s_zip").innerHTML = 'Zip/Postal Code :  ' + s_zip;
        document.getElementById("inv_s_tel").innerHTML = 'Tel :' + s_tele;
        document.getElementById("inv_s_mob").innerHTML = 'Mobile Phone : ' + s_mob;
        
        return validatePage1();

    }
    else if ( currentIndex == 1 ){
    let r_company = document.forms["shipmentForm"]["r_company"].value;
    let r_name = document.forms["shipmentForm"]["r_name"].value;
    let r_address = document.forms["shipmentForm"]["r_address"].value;
    let r_country = document.forms["shipmentForm"]["r_country"].value;
    let r_state = document.forms["shipmentForm"]["r_state"].value;
    let r_city = document.forms["shipmentForm"]["r_city"].value;
    let r_zipcode = document.forms["shipmentForm"]["r_zipcode"].value;
    let r_id = document.forms["shipmentForm"]["r_id"].value;
    let r_mobile = document.forms["shipmentForm"]["r_mobile"].value;
    let r_telephone = document.forms["shipmentForm"]["r_telephone"].value;
    document.getElementById("inv_r_com").innerHTML = 'Company : ' + r_company;
        document.getElementById("inv_r_name").innerHTML = "Sender's Name : " + r_name;
        document.getElementById("inv_r_address").innerHTML = 'Address  ' + r_address;
        document.getElementById("inv_r_country").innerHTML = 'Country : ' + r_country;
        document.getElementById("inv_r_state").innerHTML = 'State/Provine : ' + r_state;
        document.getElementById("inv_r_city").innerHTML = 'City :' + r_city;
        document.getElementById("inv_r_zip").innerHTML = 'Zip/Postal Code :  ' + r_zipcode;
        document.getElementById("inv_r_tel").innerHTML = 'Tel :' + r_telephone;
        document.getElementById("inv_r_mob").innerHTML = 'Mobile Phone : ' + r_mobile;
        return validatePage2();
    }

    else if( currentIndex == 2){

    let cou_weight = document.forms["shipmentForm"]["cou_width"].value;
    let cou_height = document.forms["shipmentForm"]["cou_height"].value;
    let cou_name = document.forms["shipmentForm"]["cou_name"].value;
    let cou_number = document.forms["shipmentForm"]["cou_number"].value;
    let cou_sample = document.forms["shipmentForm"]["cou_sample"].value;
    let cou_lenght = document.forms["shipmentForm"]["cou_length"].value;
    let v_weight = document.forms["shipmentForm"]["v_weight"].value;
    let g_weight = document.forms["shipmentForm"]["g_weight"].value;
    let prepaid_amount = document.forms["shipmentForm"]["prepaid_amount"].value;
    let collected_amount = document.forms["shipmentForm"]["coll_amount"].value;
    let booked_by = document.forms["shipmentForm"]["booked_by"].value;
      document.getElementById("inv_cou_name").innerHTML = cou_name;
        document.getElementById("inv_cou_number").innerHTML = cou_number;
        document.getElementById("inv_cou_height").innerHTML =  cou_height;
        document.getElementById("inv_cou_weight").innerHTML =  cou_weight;
        document.getElementById("inv_cou_leight").innerHTML =  cou_lenght;
        document.getElementById("inv_cou_vweight").innerHTML = v_weight;
        document.getElementById("inv_cou_gweight").innerHTML =  g_weight;
        document.getElementById("inv_prepaid_amount").innerHTML =  prepaid_amount;
        document.getElementById("inv_cou_colamount").innerHTML =  collected_amount;
        document.getElementById("inv_cou_bookedby").innerHTML = booked_by;
        // document.getElementById("inv_cou_datentime").innerHTML = 'Mobile Phone : ' + r_mobile;

        return validatePage3();
    }

    else if(currentIndex == 3)
        return validatePage4();

    else if(currentIndex == 4)
        return validatePage5();
}

function validatePage1() {

    // validate fields of first page
    
   
    let s_comp = document.forms["shipmentForm"]["s_company"].value;

    let s_name = document.forms["shipmentForm"]["s_name"].value;
    let s_country = document.forms["shipmentForm"]["s_country"].value;
    let s_state = document.forms["shipmentForm"]["s_state"].value;
    let city = document.forms["shipmentForm"]["s_city"].value;
    let s_zip = document.forms["shipmentForm"]["s_zipcode"].value;
    let s_nid = document.forms["shipmentForm"]["s_nidorpp"].value;
    let s_tele = document.forms["shipmentForm"]["s_telephone"].value;
    let s_mob = document.forms["shipmentForm"]["s_mobile"].value;
    if (s_comp == "") {
    alert("Company Name must be filled out");
    return false;
    }
    else if (s_name == "") {
    alert("Sender Name must be filled out");
    return false;
    }
    else if (s_country == "") {
    alert("Sender Counry Name must be filled out");
    return false;
    }
    // else if (s_state == "") {
    // alert("State Name must be filled out");
    // return false;
    // }
    else if (city == "") {
    alert("City Name must be filled out");
    return false;
    }
    else if (s_zip == "") {
    alert("Zip Code must be filled out");
    return false;
    }
    else if (s_nid == "") {
    alert("NID or Password must be filled out");
    return false;
    }
    else if (s_tele == "") {
    alert("Telephone Numer must be filled out");
    return false;
    }
    else if (s_mob == "") {
    alert("Moble number must be filled out");
    return false;
    }
    else{
        return true;
    }
 //or false    
}

function validatePage2() {
    

    let r_company = document.forms["shipmentForm"]["r_company"].value;
    let r_name = document.forms["shipmentForm"]["r_name"].value;
    let r_address = document.forms["shipmentForm"]["r_address"].value;
    let r_country = document.forms["shipmentForm"]["r_country"].value;
    let r_state = document.forms["shipmentForm"]["r_state"].value;
    let r_city = document.forms["shipmentForm"]["r_city"].value;
    let r_zipcode = document.forms["shipmentForm"]["r_zipcode"].value;
    let r_id = document.forms["shipmentForm"]["r_id"].value;
    let r_mobile = document.forms["shipmentForm"]["r_mobile"].value;
    let r_telephone = document.forms["shipmentForm"]["r_telephone"].value;
    if (r_company == "") {
    alert("Company Name must be filled out");
    return false;
    }
    else if (r_name == "") {
    alert("Name must be filled out");
    return false;
    }
    else if (r_address == "") {
    alert(" Address must be filled out");
    return false;
    }
    else if (r_country == "") {
    alert("Counry Name must be filled out");
    return false;
    }
    else if (r_state == "") {
    alert("State must be filled out");
    return false;
    }
    else if (r_city == "") {
    alert("City must be filled out");
    return false;
    }
    else if (r_zipcode == "") {
    alert("zipcode must be filled out");
    return false;
    }
    else if (r_id == "") {
    alert("ID must be filled out");
    return false;
    }
    else if (r_mobile == "") {
    alert("Moble number must be filled out");
    return false;
    }
    else if (r_telephone == "") {
    alert("Telephone number must be filled out");
    return false;
    }
    else{
        return true;
    }  
}

function validatePage3() {
    

    let cou_name = document.forms["shipmentForm"]["cou_name"].value;
    let cou_number = document.forms["shipmentForm"]["cou_number"].value;
    let cou_sample = document.forms["shipmentForm"]["cou_sample"].value;
    let v_weight = document.forms["shipmentForm"]["v_weight"].value;
    let g_weight = document.forms["shipmentForm"]["g_weight"].value;
    let prepaid_amount = document.forms["shipmentForm"]["prepaid_amount"].value;
    let booked_by = document.forms["shipmentForm"]["booked_by"].value;

    if (cou_name == "") {
    alert("Courier Name must be filled out");
    return false;
    }
    else if (cou_number == "") {
    alert("Courier Number be filled out");
    return false;
    }
    else if (cou_sample == "") {
    alert("Sample must be filled out");
    return false;
    }
    
    else if (g_weight == "") {
    alert("G Weight must be filled out");
    return false;
    }
    else if (prepaid_amount == "") {
    alert("prepaid amount must be filled out");
    return false;
    }
    else if (booked_by == "") {
    alert("Booked By must be filled out");
    return false;
    }
    
    else{
        return true;
    }   
}

function validatePage4() {

    // validate fields of first page
    return true; //or false    
}

function validatePage5() {

  
                
                     // var qty = $('#s_company').val();
                     // console.log(qty);
              
    return true; //or false    
}

// $("#example-vertical").steps({
//     headerTag: "h3",
//     bodyTag: "section",
//     transitionEffect: "slideLeft",
//     cssClass: 'circle wizard',
//     titleTemplate: '<span class="number">#index#</span>',
//     stepsOrientation: "vertical"
// });
// $("#pill-vertical").steps({
//     headerTag: "h3",
//     bodyTag: "section",
//     transitionEffect: "slideLeft",
//     cssClass: 'pills wizard',
//     titleTemplate: '#title#',
//     stepsOrientation: "vertical"
// });

