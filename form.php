


<form method="post">
    <label for="">Student Name</label>
    <input type="text" name="student_name" value="<?php echo $student_name ?>"><br><br>

    <label for="">Matric No.</label>
    <input type="text" name="matric_no" value="<?php echo $matric_no ?>"><br><br>

    <label for="">Subject</label>
    <input type="text" name="subject_name" value="<?php echo $subject_name ?>"><br><br>

    <label for="">Test 1 (20%)</label>
    <input type="number" name="test_1" value="<?php echo $test_1 ?>" min="0" max="20"><br><br>

    <label for="">Test 2 (30%)</label>
    <input type="number" name="test_2" value="<?php echo $test_2 ?>" min="0" max="30"><br><br>
    
    <label for="">Final (50%)</label>
    <input type="number" name="final" value="<?php echo $final ?>" min="0" max="50"><br><br>
    
    <input type="submit" name="submit" value="Submit">
    
</form>

<style>
    label {
        display: inline-block;
        width: 100px;
    }

    style {
        width: 200px;
    }


</style>