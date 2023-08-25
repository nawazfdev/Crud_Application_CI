<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/docs.min.css'; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<body>
    <div class="navbar navbar-dark bg-dark">
<div class="container">
    <a href="#" class="navbar-brand">Crud Application</a>
</div>

    </div>
    <div class="container" style="padding-top:10px">
        <h1>View User</h3>
        <hr>
        <div class="row"></div>
         <div class="col-md-12"></div>
         <table class="table table-striped">
            <tr>

            <th>ID</th>
            <th>Name</th>

            <th>Email</th>

            <th>Edit</th>
            <th>Delete</th>


</tr>
<?php if (!empty($users)) {
    foreach ($users as $key => $value) {
        ?>
        <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->name; ?></td>
            <td><?php echo $value->email; ?></td>
            <td>
                <a href="<?php echo base_url('user/edit/' . $value->id); ?>" class="btn btn-primary">Edit</a>
                <a href="<?php echo base_url('user/delete/' . $value->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php
    }
} else {
    ?>
    <tr>
        <td colspan="4">No users found</td>
    </tr>
<?php } ?>



         </table>
     </div>
</body>
</html>