$(document).ready(function () {

    var highlightMatchedSymbol = function (text) {
        $(".paragraph.match").each(function () {
            $(this).html($(this).html().replace(new RegExp(text, "gi"), '<span class="matchedFragment">' + text + '</span>'));
        });
    };

    var highlightMatchedParagraph = function(){
	if($(".highLightParagraphButton").prop("checked")) {
		$(".match").css("background-color", "green");
	} else {
		$(".paragraph").css("background-color", "");
	}
    }
 
    $(".searchText").on("keyup click input", function () {
		$(".matchedFragment").contents().unwrap();
		$(".paragraph").css("background-color", "");
        if (this.value.length > 0) {
            $(".paragraph").removeClass("match").filter(function () {
                return $(this).text().toLowerCase().indexOf($(".searchText").val().toLowerCase()) != -1;
            }).addClass("match");
            highlightMatchedSymbol(this.value);
	    highlightMatchedParagraph();
        }
        else {
            $(".paragraph").removeClass("match").css("background-color", "");
        }
    });
	
    $(".highLightParagraphButton").on("click", function(){
	highlightMatchedParagraph();
    }); 
 
});