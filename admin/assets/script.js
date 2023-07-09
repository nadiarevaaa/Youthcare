const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i => {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})


const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if (window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if (searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})


if (window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if (this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



// const switchMode = document.getElementById('switch-mode');
// const logoImg = document.getElementById('logo');
// const chartDataset = [{
//     label: 'Total Donation in Rupiah',
//     data: [10000000, 25000000, 10000000, 25000000, 10000000, 25000000, 10000000, 25000000, 10000000, 25000000, 10000000, 24000000],
//     backgroundColor: '#D90069',
//     borderWidth: 0,
//     borderRadius: 5,
//     borderSkipped: false,
// }];

// // Function to update the chart colors
// function updateChartColors(darkMode) {
//     const chartBackgroundColor = darkMode ? '#E966A0' : '#D90069';

//     // Update the backgroundColor property of the chart's dataset
//     chartDataset[0].backgroundColor = chartBackgroundColor;

//     // Update the chart
//     myChart.update();
// }

// // Event listener for the dark mode switch
// switchMode.addEventListener('change', function () {
//     if (this.checked) {
//         document.body.classList.add('dark');
//         logoImg.src = "img/Only logo.png";
//         updateChartColors(true); // Set dark mode colors
//     } else {
//         document.body.classList.remove('dark');
//         logoImg.src = "img/Only logo black.png";
//         updateChartColors(false); // Set light mode colors
//     }
// });


// Create the chart
// const ctx = document.getElementById('myChart');
// const myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
//         datasets: chartDataset,
//     },
//     options: {
//         responsive: true,
//         maintainAspectRatio: false,
//         plugins: {
//             legend: {
//                 position: 'top',
//             },
//         },
//         scales: {
//             x: {
//                 grid: {
//                     display: false,
//                 },
//             },
//             y: {
//                 grid: {
//                     display: false,
//                 },
//                 beginAtZero: true,
//             },
//         },
//     },

(function ($) {
   // ==== Preloader
   function preloader() {
	if ($('#preloader').length) {
		$('#preloader').fadeOut('slow');
	}
}

/*---------------------
=== Document Ready  ===
----------------------*/
$(document).ready(function () {
	mainMenu();
	headerBreakpointResize();
	counterUp();
	projectProgressBar();
	projectSliderOne();
	projectSliderTwo();
	teamSliderOne();
	activeTooltip();
	imgBlockSlider();
});

/*--------------------
=== Window Resize  ===
--------------------*/
$(window).on('resize', function () {
	headerBreakpointResize();
});

/*--------------------
=== Window Scroll  ===
----------------------*/
$(window).on('scroll', function () {
	stickyHeader();
});

/*------------------
=== Window Load  ===
--------------------*/
$(window).on('load', function () {
	preloader();
	new WOW().init();
});
})(jQuery);
