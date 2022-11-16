<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Newsletter</title>
</head>
<body>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action = "/submit" method = "post" class="d-flex align-items-center justify-content-center" style="height:100vh;">
@csrf

<div class="form-group">
    <b><label for="newstitle" style="font-size:25px">Title</label></b>
    <input name = "newstitle" id="newstitle" type="text" class="form-control" style="width:450px" required>
    <b><label for="newsbody" style="font-size:25px">News body</label></b>
    <textarea name ="newsbody" id="newsbody"  type="text" class="form-control"  rows="9" style="width:450px" required></textarea>
    <button type="submit" class="btn btn-primary">Submit</button> 
</div>
</form>

</body>
</html>