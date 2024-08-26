$(function (switchId){
    //Ajax get data from data.json
    $.getJSON('model/data.json', function (data) {
        if (data.pages.find(page => page.id == "Coke-Page")){
            document.getElementById("switcher-c").setAttribute("whichChoice", switchId);

            
        }
    })
})