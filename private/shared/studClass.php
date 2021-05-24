<?php
//require_once('../../../private/initialize.php');
?>
    <div class="row pb-2">
        <select name="studClass" id="studClass" required="required" class="form-control">
            <option value=''>Choose a Class</option>
            <?php
                $classs = fetch_all_studClass();
                while($row = mysqli_fetch_assoc($classs)){
                    $classsId =  $row['classsId'];
                    $classsName =  $row['classsName'];
                        
                    echo "<option value='$classsId'>$classsName</option>";
                }
            ?>
        </select>       

    </div>
        