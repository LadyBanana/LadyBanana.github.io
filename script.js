function send_form() { 
var msg = $("#forma").serialize();
$.ajax({
type: "POST",
url: "mail.php",
data: msg,
success: function(data) {
alert("Send");
setTimeout(function () {
$(".feedback_form_bg").fadeOut();}, 1000);
},
error:  function(xhr, str){
alert("Error!");
setTimeout(function () {$(".feedback_form_bg").fadeOut();}, 1000);
}
});
}
