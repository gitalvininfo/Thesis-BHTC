document.body.addEventListener("keydown", function (event) {
				if (event.keyCode === 84) {
					window.location.replace("reports.php");
				}
				if (event.keyCode === 69) {
					window.location.replace("examination_reports_overview.php");
				}
			});