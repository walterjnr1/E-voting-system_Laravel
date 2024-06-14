<?php 
include('../inc/topbar.php'); 
if(empty($_SESSION['login_email']))
    {   
      header("Location: ../Account/login.php"); 
    }

	//activate top-up
if(isset($_POST["btnpay"]))
{
    $_SESSION['amt']  = $_POST['txtamt'];
header("Location: proceed_pay.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Payment History| <?php echo $sitename;  ?></title>

	<!-- Site favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../<?php echo $logo; ?>">


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
            <?php include('middlebar.php'); ?>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Payment History</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
								<th class="table-plus datatable-nosort">
								<div align="center"><strong>SN </strong></div></th>
									<th class="table-plus datatable-nosort"><div align="center"><strong>Reference ID </strong></div></th>
									<th><div align="center"><strong>Amount</strong></div></th>
									<th><div align="center"><strong>Date</strong></div></th>
								</tr>
							</thead>
							<tbody>
							<?php
		
		$sql = "SELECT * FROM tblpayment  WHERE email='$email' ORDER BY payment_Date desc";
			$result = $conn->query($sql);
			$cnt=1;
		   while($row = $result->fetch_assoc()) { 
								
	  ?>
								<tr>
									<td class="table-plus"><div align="center"><?php echo $cnt;  ?></div></td>
									<td><div align="center"><?php echo $row['referenceID'];  ?></div></td>
									<td><div align="center">N<?php echo number_format((float)$row['amt'] ,2); ?></div></td>
									<td class="table-plus"><div align="center"><?php echo $row['payment_Date'];  ?></div></td>

								</tr>
								<?php $cnt=$cnt+1;} ?>

							</tbody>
						</table>
					</div>
				</div>
				<a href="https://api.whatsapp.com/send?phone=+2348091414393&text=Hello, I am <?php echo $fullname_user;  ?>. I have a complain/Request" class="float">
<i class="fa fa-whatsapp my-float"></i>
</a>
				
				<!-- Export Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
            <?php include('../footer.php'); ?>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>