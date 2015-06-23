$(document).ready(function() {
	$("#course-list").hide();
    $("#courses").click(function(){
        $("#course-list").slideToggle();
        if ($('#courses').text() == "Show") {
            $('#courses').text('Hide');
            $('#course-arrow').addClass('flip-arrow');
        } else {
            $('#courses').text('Show');
            $('#course-arrow').removeClass('flip-arrow');
        }
    });
});
