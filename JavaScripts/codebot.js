/*	
**	This is specific js file for this project
*/
/*
function sendCode()
{
	var code = document.getElementById("codeBox").value;
	//alert(code);
}*/
$('#show-op').click(function(){
	var src_code = $("#codeBox").val();
	//alert(src_code);

	$.ajax({
		  type : 'POST',
		  url  : 'compile.php',
		  data : { code:src_code },
		  success :  function(response)
	      {
	      	$('#outputBox').html(response);
	      	//$('#outputBox').html("Hello <b>world!</b><br>Bye");
	      }
	});
});

$("textarea").keydown(function(e) {
    if(e.keyCode === 9) { // tab was pressed
        // get caret position/selection
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var $this = $(this);
        var value = $this.val();

        // set textarea value to: text before caret + tab + text after caret
        $this.val(value.substring(0, start)
                    + "\t"
                    + value.substring(end));

        // put caret at right position again (add one for the tab)
        this.selectionStart = this.selectionEnd = start + 1;

        // prevent the focus lose
        e.preventDefault();
    }
});