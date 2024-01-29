<?php
include_once('./header.php');
include_once('../connect.php');

$sql = "SELECT * FROM `user` INNER JOIN `login` ON `login`.`uid` = `user`.`id` WHERE `login`.`status` = 1;";
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
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">User</th>
            <th scope="col">Documents</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
        while ($data = $result->fetch_assoc()) {
            $id = $data['id'];
            $username = $data['username'];
            $email = $data['email'];
            ?>
            <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['mobile'];?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['password'];?></td>
                <td><?php echo $data['type'];?></td>
                <td><?php 
                $docs = explode(", ",  $data['documents']);
                foreach ($docs as $fruit) {
                   if($fruit==''){
                    ?>
                   <h6>Document Not Uploaded</h6>
                    <?php
                   }else{
                    ?>
                    <img src="<?php echo $fruit;?>" style="width:120px;object-fit:contain;" alt="">
                    <?php
                   }
                 
                }
                ?></td>
                <td><i onclick="Delete(<?php echo $id;?>);" style="font-size:20px; border:1px solid gray;padding:8px;border-radius:5px; " class="fa-solid fa-trash"></i></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </tbody>
</table>
    </div>
<script>
    function Delete(id){
        $.ajax({
                    type: "POST",
                    url: "./backend/delete.php",
                    data: { id:id },

                    success: function (resultData) {

                        resultData = JSON.parse(resultData)
                        if(resultData.code=='200'){
                            window.location.href="http://acses.in/dashboard/vendors.php"
                        }else{
                            alert("Something went wrong");
                        }
                       
                       
                    }
                })
    }
</script>


<?php
$stmt->close();
$conn->close();

include_once('./footer.php');
?>