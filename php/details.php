<?php
    include_once("connection.php");
    $name=$_POST['name'];
    $query="select * from details where Name='".$name."';";
    $result =$conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="top">
        <h1><u> Uttarakhand Mayrtr Information</u></h1>
    </div>
    <div class="details">
        <?php
            if ($result->num_rows <= 0)
            {
        ?>
                <h1 style="font-size:20px; color:red;">NO Result Found...</h1>
        <?php
            }else{
                while($row=$result->fetch_assoc())
                {
        ?>
                    <table align="center" border="1px" style="background-color:white; width:600px;">
                        <tr>
                            <td><b>Name</b></td>
                            <td><?php echo $row['Name'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Father's Name</b></td>
                            <td><?php echo $row['Father_Name'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Rank & Unit</b></td>
                            <td><?php echo $row['Rank_Unit'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Date of Birth</b></td>
                            <td><?php echo $row['DOB'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Date of Joining</b></td>
                            <td><?php echo $row['DOJ'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Date of Martyrdom</b></td>
                            <td><?php echo $row['DOM'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Address</b></td>
                            <td><?php echo $row['Address'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Brief Of Joining</b></td>
                            <td><?php echo $row['Brief_Of_Joining'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Award</b></td>
                            <td><?php echo $row['Award'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Education</b></td>
                            <td><?php echo $row['Education'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Rank of Joining</b></td>
                            <td><?php echo $row['Rank_Of_Joining'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Family Details</b></td>
                            <td><?php echo $row['Family_Details'] ?></td>
                        </tr>
                        <br><br>
                    </table>
        <?php
                }
            }
        ?>
    </div>
</body>
</html>