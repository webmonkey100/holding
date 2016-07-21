<?php
	header('X-UA-Compatible: IE=edge');
	session_start();
	date_default_timezone_set('Europe/London');
	setlocale(LC_ALL, 'en_GB');
	ini_set('display_errors', '1');
	error_reporting('1');
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('memory_limit', '512M');
	ini_set('max_execution_time', '360');
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	<link href="https://www.sitefiles.co.uk/live/site-core-4.css" rel="stylesheet" type='text/css'>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
	<link href='https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>

    <style>
		html,body {height: 100%; color: #666666;}
		h1, h2, h3, h4, h5, h6 { color: #444444; margin-top: 0px; font-family: 'Ubuntu', sans-serif; font-weight: 400;}   
		.go_align_center {text-align: center;}
		.col-text-site { color: #337AB7; }
		.col-bg-site { background: #337AB7; }
		.lead { font-family: 'Ubuntu', sans-serif; font-weight: 300;}
		@media (max-width: 768px)  {}
		@media (min-width: 768px) {
			body { background: #f6f6f6;}
			#page_wrapper { width: 750px;  margin: 30px auto 50px auto;  background: #FFFFFF; padding: 20px 0px 20px 0px; border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px; -moz-box-shadow:0px 0px 5px rgba(0,0,0,0.2); -webkit-box-shadow:0px 0px 5px rgba(0,0,0,0.2); box-shadow:0px 0px 5px rgba(0,0,0,0.2); }
		}
		@media (min-width: 992px) {#page_wrapper { width: 970px; }}
		@media (min-width: 1200px) {#page_wrapper { width: 1170px; }	}
		table.dataTable thead>tr>th.sorting_asc,table.dataTable thead>tr>th.sorting_desc {color: #000000;}
		/* red, pink, purple, deep-purple, indigo, blue, light-blue, cyan, teal, green, light-green, lime, yellow, amber, orange, deep-orange, brown, grey, blue-grey, black, white */
 </style>

</head>
<body class="col-bg-blue-grey-50">

<div id="page_wrapper">

<div class="container">

<div class="row"><div class="col-xs-12">

		<h1 class="go_align_center"><i class="fa fa-cogs col-text-site"></i> Single Page</h1>

		<p class="lead go_align_center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

		<p class="go_align_center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		<p>&nbsp;</p>

	<div class="row">
		<div class="col-xs-12 col-sm-6">

		<h2><i class="fa fa-mobile col-text-site"></i> App</h2>


<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" name="form" class="form-horizontal">

		<div class="form-group">
		  <label for="form_input" class="control-label col-sm-3">Input</label>
			<div class="col-sm-9"><input type="text" class="form-control" name="form_input" id="form_input" value="<?php echo $_POST['form_input']; ?>"></div>
		</div>

		<div class="form-group">
		  <label for="form_textarea" class="control-label col-sm-3">Textarea</label>
			<div class="col-sm-9"><textarea name="form_textarea" class="form-control"><?php if (isset($_POST['form_textarea'])) { echo $_POST['form_textarea']; } ?></textarea></div>
		</div>

	<div class="form-group">
		 <div class="col-sm-offset-3 col-sm-10">
			<button type="submit" name="submit" class="btn btn-primary">Submit <i class="fa fa-share"></i></button>
		</div>  
	</div>



</form>

		</div>
		<div class="col-xs-12 col-sm-6">
		
		<h2><i class="fa fa-retweet col-text-site"></i> Result</h2>

<?php
	if (isset($_POST['form_textarea'])) {
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}
?>
		
		</div>
	</div>

<p>&nbsp;</p>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

	<h2><i class="fa fa-database col-text-site"></i> Data Tables</h2>

<p>&nbsp;</p>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
        </tbody>
	</table>


</div></div><!-- /row -->

</div><!-- /container -->

</div><!-- /page_wrapper  -->



</body></html>
<?php
	$log_file = 'log_' . date('Y-m-d') . '.txt';
	$log_data = date('Y-m-d H:i:s') . '|add|Document added|Dave Smith' . "\n";
	// file_put_contents($log_file, $log_data, FILE_APPEND | LOCK_EX);
	
	// if (file_exists($log_file)) { $log_read = file_get_contents($log_file); echo '<h2><i class="fa fa-clock-o col-text-site"></i> Log</h2>' . nl2br($log_read, false); }
?>
