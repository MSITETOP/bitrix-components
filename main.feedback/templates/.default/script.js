$('#btn-form-mrcrook').click(function()
{
	$.ajax({
		type: "POST",
		dataType: "json",
		url:  "/",
		data: $('.form-mrcrook').serialize(),
		success: function(data) {
			if(data.success) {
				$(".message-form-mrcrook").html(data.success).show();
				$(".fild-name").removeClass("error");
				$(".fild-phone").removeClass("error");
				$(".fild-mail").removeClass("error");
				$(".fild-message").removeClass("error");

			} else {
				if($.inArray( "name", data.error )>-1){
					$(".fild-name .error-text").html("Не корректно заполнено поле");
					$(".fild-name").addClass("error");
				} else {
					$(".fild-name .error-text").html("");
					$(".fild-name").removeClass("error");
				};
				if($.inArray( "phone", data.error )>-1){
					$(".fild-phone .error-text").html("Не корректно заполнено поле");
					$(".fild-phone").addClass("error");
				} else {
					$(".fild-phone .error-text").html("");
					$(".fild-phone").removeClass("error");
				};
				if($.inArray( "mail", data.error )>-1){
					$(".fild-mail .error-text").html("Не корректно заполнено поле");
					$(".fild-mail").addClass("error");
				} else {
					$(".fild-mail .error-text").html("");
					$(".fild-mail input").css('border','2px solid #C6C6C6');
					$(".fild-mail").removeClass("error");
				};
				if($.inArray( "message", data.error )>-1){
					$(".fild-message .error-text").html("Не корректно заполнено поле");
					$(".fild-message").addClass("error");
				} else {
					$(".fild-message .error-text").html("");
					$(".fild-message").removeClass("error");
				};
			}
		}
	});
	return false;
});
