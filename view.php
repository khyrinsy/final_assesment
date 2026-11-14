<?php
include "auth.php";
include "header.php";
include "db.php";

$id = $_GET['id'] ?? 0;

$sql = $conn->prepare("SELECT * FROM results WHERE id = $id");
$sql->execute();
$row = $sql->get_result()->fetch_assoc();
?>

<h2>View Student Result</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Student Name</th>
        <td><?php echo $row['student_name']; ?></td>
    </tr>
    <tr>
        <th>Matric Number</th>
        <td><?php echo $row['matric_no']; ?></td>
    </tr>
    <tr>
        <th>Subject Name</th>
        <td><?php echo $row['subject_name']; ?></td>
    </tr>
    <tr>
        <th>Subject Code</th>
        <td><?php echo $row['subject_code']; ?></td>
    </tr>
    <tr>
        <th>Test 1 (20%)</th>
        <td><?php echo $row['test_1']; ?></td>
    </tr>
    <tr>
        <th>Test 2 (30%)</th>
        <td><?php echo $row['test_2']; ?></td>
    </tr>
    <tr>
        <th>Final (50%)</th>
        <td><?php echo $row['final']; ?></td>
    </tr>
    <tr>
        <th>Total Marks</th>
        <td><?php echo $row['total']; ?></td>
    </tr>
    <tr>
        <th>Final Grade</th>
        <td><?php echo $row['grade']; ?></td>
    </tr>
</table>

<br>
<a href="index.php"><button>Back</button></a>

<?php
include "footer.php";
?>