<!DOCTYPE html5 strict>
<html>
<head >
	<title>Cs Table</title>
	<meta name="description" content="Timetable,class schedule,classes,times,schedule,courses,lecturers">
	<meta name="viewport" content="width=device-width, initial-scale=2, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.superhero.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.cerulean.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.5.5/css/angular-datatables.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/flatty.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/mansonry-docs.css">


	<!-- <style type="text/css">
	center p, blockquote {
		font-weight: 100px;
		font-size: 20px;
		line-height: 30px;
	}
	div.container{
		padding-top:60px;
	}
	.pix div img{
		margin: 0px 0px 0px 0px;
	}

	@media print {
		.page{
			page-break-inside: avoid;
			page-break-after: always;
		}
		
	}

	</style> -->
</head>
<body data-ng-app='webApp' ng-controller="ctrl" >

	<div class="">
		<!-- <div class="header">		
			<nav class="navbar-default navbar-fixed-top container">
				<ul class="nav nav-tabs">
					
				</ul>
			</nav>
		</div> -->

		<div class="navbar navbar-default navbar-fixed-top" >
		     <div class="container-fluid"style="padding-top: 10px;">
		       <div class="navbar-header">
		         <a href="/" class="navbar-brand"><span style="font-size:1.5em;">Cs Table</span></a>
		       </div>
		       <div class="" id="navbar-main">
		         <ul class="nav navbar-nav nav-pills">
		           <!-- <li><a page="#this_is_me" onclick="popItems('this_is_me');">This is me</a></li>
		           <li><a page="#childhood">Childhood</a></li>
		           <li><a page="#family">Family</a></li>
		           <li><a page="#aspirations">Aspirations</a></li>
		           <li><a page="#travel">Travel</a></li>
		           <li><a page="#Impactors">Role models</a></li>
		           <li><a page="{{linkPath}}" ui-sref="{{linkPath}}">{{linkName}}</a></li>
		           <li><a page="{{linkPath}}" ui-sref="home">Route 1</a></li>
				   <li><a page="{{linkPath}}" ui-sref="home">Route 2</a></li>
		           <BUTTON class="btn btn-success" onclick="$.print()">Print</BUTTON>
		           <li><a href="" class="btn btn-success" onclick='save()'>Save pdf</a></li> -->
		         </ul>
		       </div>
		     </div>
		   </div>
		
			</div>

			<!-- content -->
			<!-- content here -->
			<div class='content container'>
			
				<div class="jumbotron" style="margin-top:90px; margin-bottom:110px;">
					<center>
						<h2>Cs Table</h2>
						Checkout out your class schedule
					</center>
				</div>


			</div>


				<div class="container-fluid" ng-cloak>
					<div class="col-md-2 col-xs-12">
						<form name="qForm" ng-sumbit='search_courses(search_string)'>
							<div class="form-group">
								<label>Courses</label>
								<textarea rows="4" class="form-control" ng-required required ng-model='search_string' placeholder="Search by any column value. Separate multiple values with comma"></textarea>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-info form-control" ng-click='search_courses(search_string)'>Search by input</button>
								<button class="btn btn-primary form-control" ng-click='clear()'>Clear</button>
							</div>
						</form>

						
					</div>

					<!-- table start -->
					<div class="table-responsive col-md-8 col-xs-12" >
			          <!-- <p><b>Search results {{votersFiltered.length}}</b></p> -->
			           <table datatable='ng' dt-options='dT.dtOptions' dt-column-defs="dT.dtColumnDefs" class="table table-condensed table-striped table-hover table-bordered" >

			             <thead>
			               <th>Lecturer</th>
			               <th>Cource code & Title</th>
			               <th>Credit hours</th>
			               <th>Location</th>
			               <th>Day(s)</th>
			               <th>Time</th>
			             </thead>
			             <tbody>
				             <tr ng-repeat="sch in schedules track by sch.course">
				             	<td>{{sch.lecturer}}</td>
				             	<td>{{sch.course}}</td>
				             	<td>{{sch.credit_hours}}</td>
				             	<td>{{sch.location}}</td>
				             	<td>{{sch.day}}</td>
				             	<td>{{sch.time}}</td>
				             </tr>

			             </tbody>

			           </table>
			           <span align-content"left">Total listed courses: {{schedules.length}}</span>
			         </div>
					<!-- table end -->

					<div class="col-md-2  col-xs-12">
						Parameters remembered: <br>
						<span ng-repeat='param in search_string.split(",") track by $index'>{{$index + 1}} {{param}}<br></span>
					</div>
				</div>
				
			<!-- content end -->

			<footer class="footer container-fluid" style="margin-top:110px">
				<div class="navbar navbar-fixed-bottom navbar-default"><h5><center style="    color: white;
    font-family: arieal;
    font-size: 2.3em;">Malleable [ IcaSoft ]</center></h5></div>
			</footer>


	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>

	<script type="text/javascript" src="bootstrap/js/angular.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/angular-cookies.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.5.5/plugins/bootstrap/angular-datatables.bootstrap.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-datatables/0.5.5/angular-datatables.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!-- // <script src="bootstrap/js/masonry.pkgd.min.js"></script> -+-> -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script> -->
	<script type="text/javascript" src='app.js'></script>

</body>
</html>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80880344-2', 'auto');
  ga('send', 'pageview');

</script>
