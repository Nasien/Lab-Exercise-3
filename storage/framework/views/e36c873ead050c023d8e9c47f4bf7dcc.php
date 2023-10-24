<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Student</h1>
    <form method="post" action="<?php echo e(route('student.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label>Student ID</label>
            <input type="text" name="studentID" placeholder="studentID" />
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Course</label>
            <input type="text" name="course" placeholder="Course" />
        </div>
        <div>
            <input type="submit" value="Register Student" />
        </div>

    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\crud-app\resources\views/students/create.blade.php ENDPATH**/ ?>