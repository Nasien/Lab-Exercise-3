<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    <div>
        <?php if(session()->has('success')): ?>
            <div>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div>
        <div>
            <a href="<?php echo e(route('student.create')); ?>">Register a Student</a>
        </div>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>StudentID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->id); ?></td>
                    <td><?php echo e($student->studentID); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->course); ?></td>
                    <td>
                        <a href="<?php echo e(route('student.edit', ['student' => $student])); ?>">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="<?php echo e(route('student.delete',['student'=>$student])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\crud-app\resources\views/students/index.blade.php ENDPATH**/ ?>