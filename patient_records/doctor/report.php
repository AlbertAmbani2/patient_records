<?php
// Connect to MySQL database
session_start();
error_reporting(0);
include('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Add Payment</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#code").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
  <a href="manage-payment.php" class="btn btn-primary">Back</a>

  <div class="container">
    <h1 class="text-center my-4">Hospital Report</h1>
</div>
<?php
// Get patient data from database
$docid = $_GET['id']; // assuming patient ID is passed through URL parameter
$sql = "SELECT * FROM tblpatient ";
$ret = mysqli_query($con, $sql);

if (mysqli_num_rows($ret) > 0) {
  // Output medical history report
  $row = mysqli_fetch_assoc($ret);
  $patname = $row['patname'];
  $gender = $row['gender'];
  $patage = $row['patage'];
  $pataddress = $row['pataddress'];
  
  echo "<h1>Medical History and Payment Transactions Report for Patient $docid</h1>";
  echo "<p>Gender: $gender</p>";
  echo "<p>Patient Age: $patage</p>";
  echo "<p>Patient Address: $pataddress</p>";
  
  // Get medical history data from database
  $sql = "SELECT * FROM tblmedicalhistory ";
  $ret = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($ret) > 0) {
    echo "<h2>Medical History:</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Date</th><th>Diagnosis</th><th>Treatment</th></tr></thead>";
    echo "<tbody>";
    
    while ($row = mysqli_fetch_assoc($ret)) {
      echo "<tr>";
      echo "<td>" . $row['CreationDate'] . "</td>";
      echo "<td>" . $row['diagnosis'] . "</td>";
      echo "<td>" . $row['MedicalPres'] . "</td>";
      echo "</tr>";
    }
    
    echo "</tbody></table>";
  } else {
    echo "<p>No medical history found for this patient.</p>";
  }
  
  // Get payment transaction data from database
  $sql = "SELECT * FROM tblpaymenthistory WHERE PatientName = $patname";
  $ret = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($ret) > 0) {
    echo "<h2>Payment Transactions:</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Date</th><th>Amount</th><th>Description</th></tr></thead>";
    echo "<tbody>";
    
    while ($row = mysqli_fetch_assoc($ret)) {
      echo "<tr>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['Amount'] . "</td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "</tr>";
    }
    
    echo "</tbody></table>";
  } else {
    echo "<p>No payment transactions found for this patient.</p>";
  }
  
} else {
  echo "<p>Patient not found.</p>";
}

?>
</body>
</html>
