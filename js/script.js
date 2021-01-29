function validateForm(){
    var emri = document.getElementById("emri").value;
    var emri = document.getElementById("mbiemri").value;
    var emri = document.getElementById("email").value;
    var emri = document.getElementById("tel").value;
    var gjinia = document.getElementsByName("gjinia").required;
    var cbox = document.forms["myForm"]["category[]"];
    var profesioni = document.getElementsById("profesioni");

    if(emri == "" || emri == null || emri.length < 3){
        alert("Kjo hapsire nuk duhet te jete e zbrazet, dhe duhet ti kete me shume se 3 karaktere");
    }
    else if(mbiemri == "" || mbiemri == null || mbiemri.length < 3){
        alert("Kjo hapsire nuk duhet te jete e zbrazet, dhe duhet ti kete me shume se 3 karaktere");
    }
    if(tel == "" || tel == null || isNaN(tel) || tel.length < 8){
        alert("Kjo hapsire nuk duhet te jete e zbrazur dhe duhet te permbaj vetem numra dhe me madhesi deri ne 8")
 }
    var cbox = document.forms["myForm"]["category[]"];
    if(cbox[0].checked == false &&
        cbox[1].checked == false &&
        cbox[2].checked == false &&
        cbox[3].checked == false ){
            alert("Ju lutem selsktoni te pakten nje opsion nga checkbox")
        }
        var i;
        var counter = 0;
        for(i = 0; i<cbox.length; i++){
        }
        var emri = document.getElementById("myForm").value;
        if(myForm == "" ){
            alert("Hapsira nuk duhet te jete e zbrazur.");
        }

        if(counter == checkbox.length){
            alert("Ju lutem selektoni te pakten nje checkbox");
        }
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.email.value)){
            return true;
        }
        else{
            alert("Shkruani email ne formen e duhur.");
        }
    }
   