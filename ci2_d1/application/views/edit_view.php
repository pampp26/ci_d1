<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>แก้ไขข้อมูล</h2>
  <!--<form class="form-horizontal" action="/action_page.php" >-->

  	<?php echo form_open ('member/update/'.$rs['id']);?>

    <div class="form-group">
      <label  class="control-label col-sm-" for="id">ID:</label>
      <input type="text" value="<?php echo $rs['id']; ?>" class="form-control" id="id" placeholder="Enter id" name="id" readonly>
    </div>

	<div class="form-group">
      <label  class="control-label col-sm-" for="name">Name:</label>
      <input type="text" value="<?php echo $rs['name']; ?>" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label  class="control-label col-sm-" for="passwd">Password:</label>
      <input type="text" value="<?php echo $rs['passwd']; ?>" class="form-control" pass="passwd" placeholder="Enter passwd" name="passwd">
    </div>

     <div class="form-group">
      <label  class="control-label col-sm-" for="status">Status:</label>
      <input type="text" value="<?php echo $rs['status']; ?>" class="form-control" status="status" placeholder="Enter status" name="status">
    </status>
  </div>

    
    <button type="submit" class="btn btn-default">ตกลง</button>
    <?php echo form_close ();?>
  <!--</form>-->
</div>


</body>
</html>
