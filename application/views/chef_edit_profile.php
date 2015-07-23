<!DOCTYPE html>
<html>
<head>
	<title>Chef Profile Update Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>

<div class="bs-example">
    <h1>Edit Your Profile</h1>
    <form class="form-horizontal" action="/chefs/chef_bio_update" method="post">
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Your Bio:</label>
            <div class="col-xs-9">
                <textarea rows="4" class="form-control" id="postalAddress" placeholder="Enter your bio here!" name="new_bio"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Select image to upload:</label>
    		<input type="file" name="fileToUpload" id="fileToUpload">
		</div>

        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>


</body>
</html>