( function ( $ ) {

	var charts = {
		init: function () {
			// -- Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#292b2c';

			this.createCompletedJobsChart();

		},

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function () {

			var ctx = document.getElementById("myAreaChart");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio'], // The response got from the ajax request containing all month names in the database
					datasets: [{
						label: "Media",
						lineTension: 0.5,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
						data: [20, 28, 12, 2, 17] // The response got from the ajax request containing data for the completed jobs in the corresponding months
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 5
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: 30, // The response got from the ajax request containing max limit for y axis
								maxTicksLimit:15,
							},
							gridLines: {
								color: "rgba(0, 0, 0, .05)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			});
		}
	};

	charts.init();

} )( jQuery );
