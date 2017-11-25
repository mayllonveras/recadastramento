//<![CDATA[
this.imagePreview = function(){ 
    /* CONFIG */
    xOffset = 200; // distancia do topo //
    yOffset = 30; // distancia a esquerda //

    // estas duas variáveis determinam a distância popup a partir do cursor
    // se precisar ajuste para obter o resultado correto

    /* END CONFIG */
    $("a.preview").hover(function(e){
        this.t = this.title;
        this.title = "";
        var c = (this.t != "") ? "<br/>" + this.t : "";
        $("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");
        $("#preview")
        .css("top",(e.pageY - xOffset) + "px")
        .css("left",(e.pageX + yOffset) + "px")
        .fadeIn("fast");
    },
    function(){
        this.title = this.t;
        $(".preview").remove();
    });
    $("a.preview").mousemove(function(e){
        $(".preview")
        .css("top",(e.pageY - xOffset) + "px")
        .css("left",(e.pageX + yOffset) + "px");
    });
};

$(document).ready(function(){
    imagePreview();
});
//]]>