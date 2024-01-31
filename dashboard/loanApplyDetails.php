<?php
include_once('./header.php');
include_once('../connect.php');

$sql = "SELECT * FROM `loan`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?><div class="conatiner p-3">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Loan Amount</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
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
                <td><?php echo $data['a_name'];?></td>
                <td><?php echo $data['loanAmt'];?></td>
                <td><?php echo $data['a_mobno'];?></td>
                <td><?php echo $data['a_email'];?></td>
                <td><i onclick="view(<?php echo $data['id'];?>);" style="font-size:20px; border:1px solid gray;padding:8px;border-radius:5px; " class="fa-solid fa-eye"></i></td>
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