<?php
$siteTitle = "Adding Videogame";
$siteName = "Videogame Collection";
$siteDescription = '';

include('includes/header.php');

# Establishing a connection to the database
include('includes/connectdb.php');

$titlename = $_POST['titlename'];
$description = $_POST['description'];
$price = $_POST['price'];
$platformid = $_POST['platformid'];
$publisherid = $_POST['publisherid'];

# Preparing a SQL-Query that will insert data into the tables
$insertquery = "INSERT INTO videogames(id, title, price, description, platformid, publisherid) VALUES (NULL, '$titlename', '$price', '$description', '$platformid', '$publisherid') "; 

# Executing the SQL-query
mysqli_query($dbc, $insertquery) or die('Error querying the database!');
?>

<div id="divspace" class="panel panel-default">
    <div class="panel-heading panel panel-success">Success..</div>
    <div class="panel-body">
    <h2>Thank you for adding a new Videogame <?php echo $titlename; ?> </h2>
    </div>
    <div class="panel-footer">
        <button class="btn btn-primary btn-block btn-success" onclick="goBack()">Go Back</button>
    </div>
</div>
<?php
    mysqli_close($dbc);
?>

<script>
    function goBack()
    {
        window.history.back();
    }
</script>
<?php  include('includes/footer.php'); ?>





