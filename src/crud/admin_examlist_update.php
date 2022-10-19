<?php
	// Establish Database Connection
    require_once "../includes/connectdb.php";
	
    $sql_query = "";
    $updateType = $_POST['updateType_ajax'];

    /*
    Legend:
        updateType:
            0 = Delete Existing Exam
            1 = Publish Existing Exam
    */

    if($updateType == 0) { // Delete Existing Exam
        $clExID_value = $_POST['clExID_ajax'];

        // (tbQuestion)Fetch Questions Data======================================================================(START)
        $sql_query = "SELECT `clQsID` FROM `tbQuestion` WHERE `clExID` = '$clExID_value';";
        $fetch_sql_query = mysqli_query($connectdb, $sql_query);
        if($fetch_sql_query){
            $curr_tbQuestion_data = null; // Without this, it will likely cause an Error if the table data is empty, which means that it will not go through the loop below, which means that this variable is never declared.
            while($curr_tbQuestion_row = mysqli_fetch_array($fetch_sql_query)){
                // $curr_tbQuestion_row['clQsBody'] = nl2br($curr_tbQuestion_row['clQsBody']);// Convert \n to <br>
                $curr_tbQuestion_data[] = $curr_tbQuestion_row;
            }
        }
        else{
            echo mysqli_error($connectdb);
        }
        // (tbQuestion)Fetch Questions Data======================================================================(END)
        if($curr_tbQuestion_data != null) { // If $curr_tbQuestion_data is empty
            for($question_count = 0; $question_count < count($curr_tbQuestion_data); $question_count++) {
                $clQsID_value = $curr_tbQuestion_data[$question_count]['clQsID'];
                
                $sql_query .= "DELETE FROM `tbAnswer`
                    WHERE `clQsID` = '$clQsID_value';
                ";
                
                $sql_query .= "DELETE FROM `tbQuestion`
                    WHERE `clQsID` = '$clQsID_value' AND `clExID` = '$clExID_value';
                ";
            }
        }
    
        $sql_query .= "DELETE FROM `tbExam`
            WHERE `clExID` = '$clExID_value';
        ";
    }
    else if($updateType == 1) { // Publish Existing Exam
        $clExID_value = $_POST['clExID_ajax'];
        $clExPublish_value = $_POST['clExPublish_ajax'];
        $clExPublishedBy_value = $_POST['clExPublishedBy_ajax'];

        $sql_query .= "UPDATE `tbExam`
            SET `clExPublish` = '$clExPublish_value', 
                `clExPublishedBy` = '$clExPublishedBy_value' 
            WHERE `clExID` = '$clExID_value';
        ";
    }

	if(!empty($sql_query)) {
        // Insert SQL Queries
        $update_sql_query = mysqli_multi_query($connectdb, $sql_query);
        
        if($update_sql_query){
            echo "Insertion to Database Successful";
        }
        else{
            echo "Insertion to Database Failed";
            echo mysqli_error($connectdb);
        }
        
        // Clear $sql_query variable(Optional)
        unset($sql_query);
    }
	
	// End Database Connection
	mysqli_close($connectdb);
?>
