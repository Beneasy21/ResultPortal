<?php
require_once('../../../private/initialize.php');
?>
    <div class="row pb-3">
        <select name="Arm" id="Arm" required="required" class="form-control">
            <option value=''>Choose an Arm</option>
            <?php
                $arms = fetch_all_arms();
                while($row = mysqli_fetch_assoc($arms)){
                    $armId =  $row['armId'];
                    $armName =  $row['armName'];
                    
                    echo "<option value='$armId'>$armName</option>";
                }
            ?>
        </select>       
    </div>
                