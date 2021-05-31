<?php
//require_once('../../../private/initialize.php');
?>

    
        <select name="acadYr" id="acadYr" required="required" class="form-control">
			<option value=''>Choose Academic Year</option>
            <?php
                $acadYr = fetch_all_acadYr();
                while($row = mysqli_fetch_assoc($acadYr)){
                    $AYId =  $row['AcadYrId'];
                    $AYName =  $row['acadYrName'];
                    echo "<option value='$AYId'>$AYName</option>";
                }
            ?>
        </select>       
    

