$(function(){

    console.log("simao collegati");

    $("#submit").click(function(){
        
        
        var name = $("#nome").val();
        var surname = $("#cognome").val();

        if(name != "" && surname!= ""){
            $("#tabella").append("<tr><td>"+cognome+"</td><td>"+nome+"</td></tr>");

            $("#nome").val("");
            $("#cognome").val("");
        }
        
    })

})