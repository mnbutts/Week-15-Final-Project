// When the DOM is ready
// Hides the project description
$(function() {
	$(".project_list li p").hide();
	$(".project_list img").click(function(){
		$(this).siblings().toggle();
	});	


// Category Control
// Use query selector to listen for change in event, checked versus unchecked
	document.querySelector('#mbHtmlCss').addEventListener('change', function (evt) {
		projectview("html_css", evt.target.checked);
	});
	document.querySelector('#mbWordpressJquery').addEventListener('change', function (evt) {
		projectview("wordpress_jquery", evt.target.checked);
	});
	document.querySelector('#mbResponsive').addEventListener('change', function (evt) {
		projectview("responsive", evt.target.checked);
	});
//Function created checks for checkbox input
	function projectview(projectCategory, bvisible) {
		//get a list of project items for each category using data attributes
		var dataSelectorVal = "";
		switch (projectCategory) {
			case "html_css":
				dataSelectorVal = "h3[data-type='html_css']";
				break;
			case "wordpress_jquery":
				dataSelectorVal = "h3[data-type='wordpress_jquery']";
				break;
			case "responsive":
				dataSelectorVal = "h3[data-type='responsive']";
				break;
		};
	$(".project").has(dataSelectorVal).css('display', bvisible ? "" : "none")};
});