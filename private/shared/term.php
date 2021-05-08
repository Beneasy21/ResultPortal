<?php
 //require_once('../../../private/initialize.php');
?>
    <div class="row pb-2">
        <select name="Term" id="Term" required="required" class="form-control">
            <option value=''>Choose a Term</option>
            <?php
                $terms = fetch_all_terms();
                while($row = mysqli_fetch_assoc($terms)){
                    $termId =  $row['termId'];
                    $termName =  $row['termName'];
                        
                    echo "<option value='$termId'>$termName</option>";
                }
            ?>
        </select>       
    </div>
