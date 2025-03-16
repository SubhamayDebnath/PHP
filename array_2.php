<?php
    $students = [
        [
            "id" => 101,
            "name" => "Subhamay",
            "age" => 22,
            "course" => "MCA",
            "marks" => [
                "Math" => 85,
                "Programming" => 90,
                "Database" => 88
            ]
        ],
        [
            "id" => 102,
            "name" => "Rahul",
            "age" => 21,
            "course" => "BCA",
            "marks" => [
                "Math" => 78,
                "Programming" => 88,
                "Database" => 82
            ]
        ],
        [
            "id" => 103,
            "name" => "Ananya",
            "age" => 23,
            "course" => "MSc IT",
            "marks" => [
                "Math" => 92,
                "Programming" => 89,
                "Database" => 94
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Student Details</title>
</head>
<body>
    <table border>
        <thead>
        <th>Student ID</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Course</th>
                <th>Math Marks</th>
                <th>Programming Marks</th>
                <th>Database Marks</th>
                <th>Percentage</th>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                    <td><?php echo $student['course']; ?></td>
                    <td><?php echo $student['marks']['Math']; ?></td>
                    <td><?php echo $student['marks']['Programming']; ?></td>
                    <td><?php echo $student['marks']['Database']; ?></td>
                    <td>
                        <?php 
                            $totalMarks = $student['marks']['Math'] + $student['marks']['Programming'] + $student['marks']['Database'];
                            $percentage = $totalMarks / 3;
                            echo number_format($percentage, 2);
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>