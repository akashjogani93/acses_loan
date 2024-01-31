<?php
include_once('./header.php');
include_once('../connect.php');

$sql = "SELECT * FROM `hajjumrah`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?><div class="conatiner p-3">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Photo</th>
            <th scope="col">Adhar</th>
            <th scope="col">Bank</th>
            <th scope="col">Pan</th>
            <th scope="col">Pass</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
        while ($data = $result->fetch_assoc()) 
        {
            ?>
            <tr>
                <th scope="row"><?php echo $data['id'];?></th>
                <td><?php echo $data['fname'].$data['lname'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['mobile'];?></td>
                <td><a href="<?php echo $data['photo']; ?>" target="_blank" class="btn btn-info">View</a></td>
                <td><a href="<?php echo $data['adhaarcard']; ?>" target="_blank" class="btn btn-info">View</a></td>
                <td><a href="<?php echo $data['bankpass']; ?>" target="_blank" class="btn btn-info">View</a></td>
                <td><a href="<?php echo $data['pancard']; ?>" target="_blank" class="btn btn-info">View</a></td>
                <td><a href="<?php echo $data['passport']; ?>" target="_blank" class="btn btn-info">View</a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </tbody>
</table>
    </div>
<script>
    function view(id)
    {
        // $.ajax({
        //     type: "POST",
        //     url: "./backend/view.php",
        //     data: { id:id },

        //     success: function (resultData) 
        //     {

        //     }
        // })
        window.location="../loanapplication.php?loanid="+id;
    }
</script>


<?php
$stmt->close();
$conn->close();
include_once('./footer.php');
?>