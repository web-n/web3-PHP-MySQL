<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql  = "
	INSER INTO topic (
		title,
		description,
		created
	) VALUES (
		'MySQL',
		'MySQL is ....',
		NOW()
	)";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}

?>
