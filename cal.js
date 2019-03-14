var result=""

$('.num').click(function(){
    if(result=="0"&&$('#result')[0].innerHTML=="0"){
        result=$('#result')[0].innerHTML=$(this)[0].value
    }else{
        result=$('#result')[0].innerHTML+=$(this)[0].value
    }
    
})
$('.operator').click(function(){ 
        if($('#result')[0].innerHTML === "") {
            $('#result')[0].innerHTML = $('#result')[0].innerHTML.concat("");   
        }
        else if( $(this)[0].value) {
            $('#result')[0].innerHTML = result.concat( $(this)[0].value);    
        }
})
$('.zero').click(function(){
    if($('#result')[0].innerHTML===""){
        $('#result')[0].innerHTML==$(this)[0].value

    }else if($('#result')[0].innerHTML===result){
        result=$('#result')[0].innerHTML+=$(this)[0].value
    }
})
$('#equal').click(function(){
    if($('#result')[0].innerHTML === result) {
        var hasil=eval(result)
        if(String(hasil).match(/\./gm)!=null){
            hasil=hasil.toFixed(5)
        }
        $('#result')[0].innerHTML  = hasil
        result=$('#result')[0].innerHTML 
    }else{
        // $('#result')[0].innerHTML= "";
    }
})
$('#delete').click(function(){
    $('#result')[0].innerHTML="0"
    result="0"
})
$('.period').click(function(){
    if($('#result')[0].innerHTML === "") {
        result = $('#result')[0].innerHTML = screen.innerHTML.concat("0.");   
    }
    else if($('#result')[0].innerHTML === result) {
        $('#result')[0].innerHTML = $('#result')[0].innerHTML.concat(".");
        
    }
})