<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="evaluateAssignment.scss">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />

    <script src="evaluateAssignment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.selectric/1.10.1/jquery.selectric.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>





<style>
	  @import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/dashboard.scss";
body {
  background-color: #1b2431;
  color: #202020;
  font-family: "Montserrat", "Helvetica", "Open Sans", "Arial";
  font-size: 13px;
}

a:hover {
  text-decoration: none;
}

p,
figure {
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #1b2431;
}

.sidebar {
  background-color: #1b2431;
  box-shadow: none;
}
.sidebar .nav-link {
  border-left: 5px solid transparent;
  color: #738297;
  padding: 0.5rem 0.75rem;
}
.sidebar .nav-link:hover {
  color: white;
}
.sidebar .nav-link.active {
  border-left: 5px solid #738297;
  color: white;
}
.sidebar .zmdi {
  display: inline-block;
  font-size: 1.35rem;
  margin-right: 5px;
  min-width: 25px;
}
.sidebar ul {
  font-size: 15px;
}

.card-list {
  width: 100%;
}
.card-list:before, .card-list:after {
  content: " ";
  display: table;
}
.card-list:after {
  clear: both;
}

.card {
  border-radius: 8px;
  color: white;
  padding: 10px;
  position: relative;
}
.card .zmdi {
  color: white;
  font-size: 28px;
  opacity: 0.3;
  position: absolute;
  right: 13px;
  top: 13px;
}
.card .stat {
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  font-size: 8px;
  margin-top: 25px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}

.card .title {
  display: inline-block;
  font-size: 8px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}
.card .value {
  font-size: 28px;
  padding: 0 10px;
}
.card.blue {
  background-color: #2298F1;
}
.card.green {
  background-color: #66B92E;
}
.card.orange {
  background-color: #DA932C;
}
.card.red {
  background-color: #D65B4A;
}

.projects {
  background-color: #273142;
  border: 1px solid #313D4F;
  overflow-x: auto;
  width: 100%;
}
.projects-inner {
  border-radius: 4px;
}

.projects-header {
  color: white;
  padding: 22px;
}
.projects-header .count,
.projects-header .title {
  display: inline-block;
}
.projects-header .count {
  color: white;	font-size:15px;

}
.projects-header .zmdi {
  cursor: pointer;
  float: right;
  font-size: 16px;
  margin: 5px 0;
}
.projects-header .title {
  font-size: 21px;
}
.projects-header .title + .count {
  margin-left: 5px;
}

.projects-table {
  background: #273142;
  width: 100%;
}
.projects-table td,
.projects-table th {
  color: white;
  padding: 10px 22px;
  vertical-align: middle;
}
.projects-table td p {
  font-size: 12px;
}
.projects-table td p:last-of-type {
  color: #738297;
  font-size: 11px;
}
.projects-table th {
  background-color: #313D4F;
  font-size:24px;
}
.projects-table tr:hover {
  background-color: #303d52;
}
.projects-table tr:not(:last-of-type) {
  border-bottom: 1px solid #313D4F;
}
.projects-table .member figure,
.projects-table .member .member-info {
  display: inline-block;
  vertical-align: top;
}
.projects-table .member figure + .member-info {
  margin-left: 7px;
}
.projects-table .member img {
  border-radius: 50%;
  height: 32px;
  width: 32px;
}
.projects-table .status > form {
  float: right;
}
.projects-table .status-text {
  display: inline-block;
  font-size: 12px;
  margin: 11px 0;
  padding-left: 20px;
  position: relative;
}
.projects-table .status-text:before {
  border: 3px solid;
  border-radius: 50%;
  content: "";
  height: 14px;
  left: 0;
  position: absolute;
  top: 1px;
  width: 14px;
}
.projects-table .status-text.status-blue:before {
  border-color: #1C93ED;
}
.projects-table .status-text.status-green:before {
  border-color: #66B92E;
}
.projects-table .status-text.status-orange:before {
  border-color: #DA932C;
}
.projects-table .status-text.status-red:before {
  border-color: #D65B4A;
}

.selectric {
  background-color: transparent;
  border-color: #313D4F;
  border-radius: 4px;
}
.selectric .label {
  color: #738297;
  line-height: 34px;
  margin-right: 10px;
  text-align: left;
}
.selectric-wrapper {
  float: right;
  width: 150px;
}

.chart {
  border-radius: 3px;
  border: 1px solid #313D4F;
  color: white;
  padding: 10px;
  position: relative;
  text-align: center;
}
.chart canvas {
  height: 400px;
  margin: 20px 0;
  width: 100%;
}
.chart .actions {
  margin: 15px;
  position: absolute;
  right: 0;
  top: 0;
}
.chart .actions span {
  cursor: pointer;
  display: inline-block;
  font-size: 20px;
  margin: 5px;
  padding: 4px;
}
.chart .actions .btn-link {
  color: white;
}
.chart .actions .btn-link i {
  font-size: 1.75rem;
}
.chart .title {
  font-size: 18px;
  margin: 0;
  padding: 15px 0 5px;
}
.chart .title + .tagline {
  margin-top: 10px;
}
.chart .tagline {
  font-size: 12px;
}

.danger-item {
  border-left: 4px solid #A84D43;
}

.zmdi {
  line-height: 1;
  vertical-align: middle;
}

  </style>
   






    <title>Courses</title>
</head>
<body>
    <h1>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">RBAC OAUTH 2.0</a>
	<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="/logout">Sign out</a>
		</li>
	</ul>
</nav>
<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#">
                  <i class="zmdi zmdi-widgets"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Assignments
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-shopping-cart"></i>
                  Students
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-accounts"></i>
                  Reports
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-chart"></i>
                  Integrations
                </a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center pl-3 mt-4 mb-1 text-muted">
					<span>Assignment Evaluation</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<i class="zmdi zmdi-plus-circle-o"></i>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
				  Current Assignments
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Students
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Reports
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Integrations
                </a>
					</li>
				</ul>
			</div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">
			<div class="card-list">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card blue">
							<div class="title">all class</div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value">89</div>
							<div class="stat"><b>13</b>% increase</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title">all members</div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value">900</div>
							<div class="stat"><b>4</b>% increase</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card orange">
							<div class="title"> max marks</div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">89/100</div>
							<div class="stat"><b>13</b>% decrease</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card red">
							<div class="title">min marks</div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">4/100</div>
							<div class="stat"><b>13</b>% decrease</div>
						</div>
					</div>
				</div>
			</div>
			<div class="projects mb-4">
				<div class="projects-inner">
					<header class="projects-header">
						<div class="title">Ongoing Assignments</div>
						<div class="count">| Class X | 5 Assignments Submitted | 2 Assignments Evaluated | 2 Assignments Pending | 1 Assignments InProgress | </div>
						<i class="zmdi zmdi-download"></i>
					</header>
					<table class="projects-table">
						<thead>
							<tr>
								<th>Roll Number</th>
								<th>Deadline</th>
								<th>Name</th>
								<th>Marks</th>
								<th>Status</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tr>
							<td>
								<p>232IS001</p>
								<p></p>
							</td>
							<td>
								<p>17th Oct, 2023</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_9.png" /></figure>
								<div class="member-info">
									<p>Myrtle Erickson</p>
									<p></p>
								</div>
							</td>
							<td>
								<p>/10</p>
								<p></p>
							</td>
							<td class="status">
								<span class="status-text status-orange">In progress</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
								<select class="action-box">
									<option>Actions</option>
									<option>Pending</option>
										<option>In Progress</option>
										<option>Completed</option>
								</select>
								</form>
							</td>
						</tr>
						<tr class="danger-item">
							<td>
								<p>232IS002</p>
								<p></p>
							</td>
							<td>
								<p>17th Oct, 2023</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
								<div class="member-info">
									<p>Amar Vladimíra</p>
									<p></p>
								</div>
							</td>
							<td>
								<p>7/10</p>
								<p></p>
							</td>
							<td class="status">
								<span class="status-text status-red">Completed</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
										<option>Actions</option>
										<option>Pending</option>
										<option>In Progress</option>
										<option>Completed</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>232IS003</p>
								<p></p>
							</td>
							<td>
								<p>17th Oct, 2023</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_7.png" /></figure>
								<div class="member-info">
									<p>Isolde Agapios</p>
									<p></p>
								</div>
							</td>
							<td>
								<p>4/7</p>
								<p></p>
							</td>
							<td class="status">
								<span class="status-text status-red">Completed</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Pending</option>
										<option>In Progress</option>
										<option>Completed</option>
						</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>232IS004</p>
								<p></p>
							</td>
							<td>
								<p>17th Oct, 2023</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_6.png" /></figure>
								<div class="member-info">
									<p>Azamat Sander</p>
									<p></p>
								</div>
							</td>
							<td>
								<p>/10</p>
								<p></p>
							</td>
							<td class="status">
								<span class="status-text status-blue">Pending</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Pending</option>
										<option>In Progress</option>
										<option>Completed</option>
						</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>232IS005</p>
								<p></p>
							</td>
							<td>
								<p>17th Oct, 2023</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_5.png" /></figure>
								<div class="member-info">
									<p>Nestan Genís</p>
									<p></p>
								</div>
							</td>
							<td>
								<p>/10</p>
								<p></p>
							</td>
							<td class="status">
								<span class="status-text status-blue">Pending</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Pending</option>
										<option>In Progress</option>
										<option>Completed</option>
						</select>
								</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="chart-data">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="chart radar-chart dark">
							<div class="actions">
								<button type="button" class="btn btn-link" 
										  data-toggle="dropdown" 
										  aria-haspopup="true" aria-expanded="false">
									 <i class="zmdi zmdi-more-vert"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<button class="dropdown-item" type="button">Action</button>
									<button class="dropdown-item" type="button">Another action</button>
									<button class="dropdown-item" type="button">Something else here</button>
								</div>
							</div>
							<h3 class="title">Class Wise Marks Distribution</h3>
							<p class="tagline">2023</p>
							<canvas height="400" id="radarChartDark"></canvas>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="chart bar-chart light">
							<div class="actions">
								<button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 <i class="zmdi zmdi-more-vert"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<button class="dropdown-item" type="button">Action</button>
									<button class="dropdown-item" type="button">Another action</button>
									<button class="dropdown-item" type="button">Something else here</button>
								</div>
							</div>
							<h3 class="title">Monthly Class Wise Student Ranks</h3>
							<p class="tagline">2023</p>
							<canvas height="400" id="barChartHDark"></canvas>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="chart doughnut-chart dark">
							<div class="actions">
								<button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 <i class="zmdi zmdi-more-vert"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<button class="dropdown-item" type="button">Action</button>
									<button class="dropdown-item" type="button">Another action</button>
									<button class="dropdown-item" type="button">Something else here</button>
								</div>
							</div>
							<h3 class="title">Top 3 Class Ranks</h3>
							<p class="tagline">2023 </p>
							<canvas height="400" id="doughnutChartDark"></canvas>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
    </h1>
    <script>
	"use strict";
class Selectize {
    constructor() {
        this.init();
    }
    init() {
        var initValue;
        $('.action-box').selectric({
            onInit: function (element) {
                initValue = $(this).val();
            },
            onChange: function (element) {
                if ($(this).val() !== initValue)
                    $(element).parents('form').submit();
            }
        });
    }
}
class Charts {
    constructor() {
        this.colors = ["#DB66AE", "#8185D6", "#89D9DF", "#E08886"];
        this.tickColor = "#757681";
        this.initRadar();
        this.initBarHorizontal();
        this.initDoughnut();
    }
    initRadar() {
        var ctxD = $('#radarChartDark'), chartData = {
            type: 'radar',
            data: {
                labels: ["Class X", "Class XI", "Class XII", "Class IX", "Class VII"],
                datasets: [
                    {
                        label: "2014",
                        backgroundColor: this.convertHex(this.colors[0], 20),
                        borderColor: this.colors[0],
                        borderWidth: 1,
                        pointRadius: 2,
                        data: [51, 67, 90, 31, 16],
                    },
                    {
                        label: "2015",
                        backgroundColor: this.convertHex(this.colors[1], 20),
                        borderColor: this.colors[1],
                        borderWidth: 1,
                        pointRadius: 2,
                        data: [75, 44, 19, 22, 43],
                    },
                    {
                        label: "2015",
                        backgroundColor: this.convertHex(this.colors[2], 20),
                        borderColor: this.colors[2],
                        borderWidth: 1,
                        pointRadius: 2,
                        data: [7, 14, 29, 82, 33]
                    }
                ]
            },
            options: {
                scale: {
                    pointLabels: {
                        fontColor: this.tickColor
                    },
                    ticks: {
                        display: false,
                        stepSize: 25
                    }
                },
                legend: {
                    position: "bottom",
                    labels: {
                        boxWidth: 11,
                        fontColor: this.tickColor,
                        fontSize: 11
                    }
                }
            }
        }, myDarkRadarChart = new Chart(ctxD, chartData);
    }
    initBarHorizontal() {
        var ctxD = $("#barChartHDark"), chartData = {
            type: 'horizontalBar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        data: [27, 59, 68, 26, 79, 55, 36, 43, 44, 30, 55, 64],
                        backgroundColor: this.colors[0],
                        hoverBackgroundColor: this.convertHex(this.colors[0], 70)
                    },
                    {
                        data: [136, 23, 44, 30, 79, 55, 61, 94, 27, 59, 98, 91],
                        backgroundColor: this.colors[1],
                        hoverBackgroundColor: this.convertHex(this.colors[1], 70)
                    },
                    {
                        data: [88, 31, 87, 61, 77, 27, 59, 58, 136, 26, 79, 85],
                        backgroundColor: this.colors[2],
                        hoverBackgroundColor: this.convertHex(this.colors[2], 70)
                    }]
            },
            options: {
                barThickness: 10,
                scales: {
                    xAxes: [{
                            stacked: true,
                            ticks: {
                                fontColor: this.tickColor,
                            },
                            gridLines: {
                                drawOnChartArea: false
                            }
                        }],
                    yAxes: [{
                            stacked: true,
                            ticks: {
                                fontColor: this.tickColor,
                                min: 0,
                                max: 100,
                                stepSize: 25
                            }
                        }]
                },
                legend: {
                    display: false
                }
            }
        }, myDarkRadarChart = new Chart(ctxD, chartData);
    }
    initDoughnut() {
        var ctxD = $('#doughnutChartDark'), chartData = {
            type: 'doughnut',
            data: {
                labels: ["Class XI", "Class XII", "Class XII"],
                datasets: [{
                        data: [300, 50, 100],
                        borderWidth: 0,
                        backgroundColor: [
                            this.convertHex(this.colors[0], 60),
                            this.convertHex(this.colors[1], 60),
                            this.convertHex(this.colors[2], 60),
                        ],
                        hoverBackgroundColor: [
                            this.colors[0],
                            this.colors[1],
                            this.colors[2],
                        ]
                    }]
            },
            options: {
                responsive: true,
                legend: {
                    position: "bottom",
                    labels: {
                        boxWidth: 11,
                        fontColor: this.tickColor,
                        fontSize: 11
                    }
                }
            }
        }, myDarkRadarChart = new Chart(ctxD, chartData);
    }
    convertHex(hex, opacity) {
        hex = hex.replace('#', '');
        var r = parseInt(hex.substring(0, 2), 16);
        var g = parseInt(hex.substring(2, 4), 16);
        var b = parseInt(hex.substring(4, 6), 16);
        var result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
        return result;
    }
}
new Selectize();
new Charts();


		</script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Course List</title>

    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }

        .container {
            background-color: #000000;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #000000;
            border: 1px solid #333333;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #008080;
            /* Teal */
            color: #ffffff;
            border-bottom: 1px solid #333333;
        }

        .card-body {
            color: #c0c0c0;
        }

        .card-footer {
            background-color: #333333;
            border-top: 1px solid #333333;
            border-radius: 0 0 10px 10px;
        }

        .btn-primary {
            background-color: #008080;
            /* Teal */
            border-color: #008080;
        }

        .btn-like {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Default button color */
        .btn-like {
            background-color: #F6CF0C;
            color: #000000;
            border: 1px solid yellow;
        }

        /* Hover effect */
        .btn-like:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #ffffff;
        }

        @import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/dashboard.scss";

        body {
            background-color: #1b2431;
            color: #202020;
            font-family: "Montserrat", "Helvetica", "Evaluate Sans", "Arial";
            font-size: 13px;
        }

        .navbar {
            background-color: #1b2431;
            margin-top:15px;
        }


        .logout-btn {
            background-color: #ff6347;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size:20px;    
        }

        .logout-btn:hover {
            background-color: #ff4d30;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><b>RBAC OAUTH 2.0</b></a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <button class="logout-btn" onclick="window.location.href='/logout';"><b>Log Out</b></a></button>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
        <h1 style="color: #ffffff;">Submitted Assignments List</h1>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                Assignment 1 : Computer Organization
            </h2>
        </div>
        <div class="card-body">
            Study of computer hardware, its organization, and architecture.
        </div>
        <div class="card-footer">
            <button class="btn btn-warning">Evaluate</button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                Assignment 2 : Operating System
            </h2>
        </div>
        <div class="card-body">
            Study of computer operating systems and how they control computer hardware and software resources.
        </div>
        <div class="card-footer">
            <button class="btn btn-warning">Evaluate</button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                Assignment 3 : Data Structures
            </h2>
        </div>
        <div class="card-body">
            Study of different data structures, such as arrays, lists, trees, and graphs, along with their properties and operations.
        </div>
        <div class="card-footer">
            <button class="btn btn-warning">Evaluate</button>
        </div>
    </div>

    </div>

    Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--  <div class="container">
        <a href="\logout" class="btn-like">Logout</a>
    </div>--> 
</body>

</html>