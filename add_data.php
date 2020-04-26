<!doctype html>
<html lang="en">

<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="style.css" rel="stylesheet" type="text/css">
<link href="" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
	
<h1>search for scp file</h1>

<!--this is the form format-->
<form class="form-horizontal"  action="search_database.php">
<fieldset>

<!-- Form search database -->
<legend>Search for scp file</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="eg. scp1" class="form-control input-md" required>
    <p class="help-block">enter a word to search for file in the database</p>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button name="submit" class="btn btn-primary">Search</button>
  </div>
</div>
</fieldset>
</form>



<!--this is the add form function with nicer formatting-->
<form class="form-horizontal" method="post" action="db_connection.php">
<fieldset>

<!-- Form add a data -->
<legend>Add a new files</legend>

<!-- page input-->
<div class="form-group">
  <label class="col-md-4 control-label" >enter page name</label>  
  <div class="col-md-6">
  <input  name="pg" type="text" placeholder="" class="form-control input-md" required>
  <span class="help-block">page name</span>  
  </div>
</div>

<!-- header input-->
<div class="form-group">
  <label class="col-md-4 control-label" >enter first header</label>  
  <div class="col-md-6">
  <input name="h1" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">header 1</span>  
  </div>
</div>

<!-- paragraph input-->
<div class="form-group">
  <label class="col-md-4 control-label" >enter first paragraph</label>  
  <div class="col-md-6">
  <textarea name="p1"  cols="50" rows="10"   class="form-control input-md"></textarea>
  <span class="help-block">paragraph 1</span>  
  </div>
</div>

<!-- image input-->
<div class="form-group">
  <label class="col-md-4 control-label" >enter first image</label>  
  <div class="col-md-6">
  <input name="img1" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">image</span>  
  </div>
</div>

<!-- seperator -->
<legend></legend>

<!-- second header input-->
<div class="form-group">
  <label class="col-md-4 control-label">enter second header</label>  
  <div class="col-md-6">
  <input name="h2" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">header 2</span>  
  </div>
</div>

<!-- second paragraph input-->
<div class="form-group">
  <label class="col-md-4 control-label" >enter second paragraph</label>  
  <div class="col-md-6">
  <textarea name="p2"  cols="50" rows="10"   class="form-control input-md"></textarea>
  <span class="help-block">paragraph 2</span>  
  </div>
</div>

<!-- second image input-->
<div class="form-group">
  <label class="col-md-4 control-label">enter second image</label>  
  <div class="col-md-6">
  <input  name="img2" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">image 2</span>  
  </div>
</div>

<!-- seperator -->
<legend></legend>

<!-- third header input-->
<div class="form-group">
  <label class="col-md-4 control-label">enter third header</label>  
  <div class="col-md-6">
  <input name="h3" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">header 3</span>  
  </div>
</div>

<!-- third paragraph input-->
<div class="form-group">
  <label class="col-md-4 control-label">enter third paragraph</label>  
  <div class="col-md-6">
  <textarea name="p3"  cols="50" rows="10"   class="form-control input-md"></textarea>
  <span class="help-block">paragraph 3</span>  
  </div>
</div>

<!-- third image input-->
<div class="form-group">
  <label class="col-md-4 control-label">enter third image</label>  
  <div class="col-md-6">
  <input name="img3" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">image 3</span>  
  </div>

</div>
<legend></legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button name="submit" class="btn btn-primary">submit</button>
  </div>
  <!-- buttone to return home -->
  <a href="index.php" type="button" class="btn btn-primary">Return to home</a>
</div>
</fieldset>

</form>
</div>



</body>