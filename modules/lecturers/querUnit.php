<select name="unit" class="form-control" id="unit" >
<option value="">----------SELECT UNITS-----------------------</option>
<?php
require'../../session.php';
require'../../connection.php';

                                  

if ($_POST) {
	$course =$_POST['course1'];
	$year =$_POST['year1'];
	$semester =$_POST['semester1'];


                        $q ="SELECT * FROM  `units` WHERE `Course` = '$course' AND `Year`='$year' AND `Semester` = '$semester' ";
                                          $r = mysqli_query($conn, $q);

                                          while ($row = mysqli_fetch_array($r)) {
                                            $unitName = $row['Unitname'];
                                            $unitId = $row['Unitid'];
                                            ?>
                                          <option value="<?php echo "$unitId"; ?>"><?php echo "$unitId"." ". "$unitName"; ?></option>

                                            <?php
                                          }

}
?>
    </select>