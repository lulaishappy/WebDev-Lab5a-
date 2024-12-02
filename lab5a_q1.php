<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "WAN SULHA BINTI WAN MOHD HASANUL ISYRAF";
        $matricnum = "AI220057";
        $course = "Bachelor of Computer Science (Information Security) with Honours";
        $yearofstudy = "3";
        $address = "Kuala Lumpur";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricnum; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearofstudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
