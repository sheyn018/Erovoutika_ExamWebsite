<?php
	// Establish Database Connection
	// require_once "includes/connectdb.php";
	require_once "../includes/connectdb.php";

	/*
        Used for: Access and Modify Exams Data
        Accessed by: 
            admin-controlpanel-examlist.js
            admin-controlpanel-exameditor.php
            admin-controlpanel-exameditor.js
    */
	// (tbExam)Fetch Exams Data======================================================================(START)
	$sql_query = "SELECT * FROM `tbExam`;";
	$fetch_sql_query = mysqli_query($connectdb, $sql_query);
	if($fetch_sql_query){
        $tbExam_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
		while($tbExam_row = mysqli_fetch_array($fetch_sql_query)){
			// $tbExam_row['clExDescription'] = nl2br($tbExam_row['clExDescription']);// Convert \n to <br>
			$tbExam_data[] = $tbExam_row;
		}
	}
	else{
		echo mysqli_error($connectdb);
	}
	// (tbExam)Fetch Exams Data======================================================================(END)

    	/*
        Used for: Access and Modify Questions Data
        PHP File Accessed by: 
            admin-controlpanel-exameditor.js
    */
	// (tbQuestion)Fetch Questions Data======================================================================(START)
	$sql_query = "SELECT * FROM `tbQuestion`;";
	$fetch_sql_query = mysqli_query($connectdb, $sql_query);
	if($fetch_sql_query){
        $tbQuestion_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
		while($tbQuestion_row = mysqli_fetch_array($fetch_sql_query)){
			// $tbQuestion_row['clQsBody'] = nl2br($tbQuestion_row['clQsBody']);// Convert \n to <br>
			$tbQuestion_data[] = $tbQuestion_row;
		}
	}
	else{
		echo mysqli_error($connectdb);
	}
	// (tbQuestion)Fetch Questions Data======================================================================(END)

    	/*
        Used for: Access and Modify Answers Data
        PHP File Accessed by: 
            admin-controlpanel-exameditor.js
    */
	// (tbAnswer)Fetch Answers Data======================================================================(START)
	$sql_query = "SELECT * FROM `tbAnswer`;";
	$fetch_sql_query = mysqli_query($connectdb, $sql_query);
	if($fetch_sql_query){
        $tbAnswer_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
		while($tbAnswer_row = mysqli_fetch_array($fetch_sql_query)){
			// $tbAnswer_row['clAsBody'] = nl2br($tbAnswer_row['clAsBody']);// Convert \n to <br>
			$tbAnswer_data[] = $tbAnswer_row;
		}
	}
	else{
		echo mysqli_error($connectdb);
	}
	// (tbAnswer)Fetch Answers Data======================================================================(END)
?>

<!DOCTYPE html>
	<script type="text/javascript">
        // Transfer fetched 'items' table from the stored 2D-array on PHP to a 2D-array on JavaScript
        var tbExam_data = <?php echo json_encode($tbExam_data); ?>;
        var tbQuestion_data = <?php echo json_encode($tbQuestion_data); ?>;
        var tbAnswer_data = <?php echo json_encode($tbAnswer_data); ?>;
    </script>
</html>










