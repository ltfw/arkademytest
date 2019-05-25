<?php
include_once("koneksi.php");
$result = mysqli_query($conn, "SELECT * FROM users ");

?>

<html>
<head>    
    <title>Soal 6 Part B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="padding-top: 50px">
        <h2>Soal 6 Part B</h2>
        <form action="add_user.php" method="post">
        <div class="row">
            
                <div class="form-group col-md-7">
                    <input type="text" name="progname" class="form-control" placeholder="Enter Programmer's Name">
                </div>
                <div class="form-group col-md-5 ">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            
        </div>
        </form>
        
        <?php 
        while($user_data = mysqli_fetch_array($result)) {         
            ?>
            <div class="table">
                <table class="table-bordered" style="width: 70%">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">
                                <?php echo $user_data['name']?> 
                            </th>
                            <th rowspan="2">
                                <form action="add_skill.php" method="post">
                                <div class="row" >
                                    <div class="col-md-9 text-center">
                                        <input type="text" name="skillname" class="form-control" placeholder="Add New Skill">
                                        <input type="hidden" name="user_id" value="<?php echo $user_data['id'] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <?php 
                                    $res= mysqli_query($conn, "SELECT * FROM skills where user_id='".$user_data['id']."'"); 
                                    while($skill = mysqli_fetch_array($res)) {         
                                    ?>
                                        <li><?php echo $skill['name']?></li>
                                    <?php }?>
                                </ul>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php }?>


    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>