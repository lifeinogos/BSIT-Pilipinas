<?php 
	$db=mysqli_connect('localhost','root','','pilipinas');
	 
	if(mysqli_connect_errno($db))
	{
			echo 'Failed to connect';
	}
	
	$search=$_GET['search'];
	echo $search;
	$sql = "SELECT * FROM pilipinas WHERE place = '$search' ";
	$result = mysqli_query($db, $sql);
	
	if( $row = mysqli_fetch_array($result) ){
				do{
					echo '
							<h1>'.$row['description'].'</h1>					
					';
				}while($row = mysqli_fetch_array($result));
			} else echo "<br /><b>Sorry, but we can not find an entry to match your query";
?>

<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

<button id="myBtn">Open Modal</button>


<div id="myModal" class="modal">


  <div class="modal-content">
    <span class="close">&times;</span>
    INSERT PHOTO OF RIZAL PARKEU HERE
	<h1><?php echo $row['description']; ?></h1>
  </div> 

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
