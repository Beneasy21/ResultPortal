<?php
require_once('../../../private/initialize.php');
?>
          <td>Subject: </td>
            <td>
                <select name="subjects" id="subjects">
                <option value=''>Choose a Subject</option>
                <?php
                    $subjects = fetch_all_subjects();
                    while($row = mysqli_fetch_assoc($subjects)){
                        $subId =  $row['subId'];
                        $subjectName =  $row['subName'];
                        
                        echo "<option value='$subId'>$subjectName</option>";
                    }
                ?>
                </select>       
            </td>
