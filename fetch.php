<?php 
include('Connection.php');
// echo "Fetch ";
$select ="SELECT * FROM `registration`";
$query = mysqli_query($conn, $select);

if($query->num_rows > 0){
    ?>
    <table border>
        <th>ID</th>
        <th>First Name</th>
        <th>Action</th>
    
    <?php
    while($row = $query->fetch_assoc()){
       ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <form action="update.php" method='POST'>
                        <input type="hidden" name="fetch_id" value="<?php echo $row['user_id']; ?>">
                        <input type="submit" name= "Update_btn" value ="Update">
                    </form>
                    <form action="delete.php" method='POST'>
                        <input type="hidden" name="fetch_id" value="<?php echo $row['user_id']; ?>"> 
                        <input type="submit" name= "delete_btn" value ="Delete">
                    </form>
                </td>
            </tr>
       <?php
        
    }
}
?>
</table>