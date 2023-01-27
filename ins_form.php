<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูล</h1>
        <hr>
<div class="mb-3">

 <div class="mb-3">
 <form action="create.php" method="post">
        <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="S_Name" required>
            </div>
            <div class="mb-3">
                <label for="LastName" class="form-label">LastName</label>
                <input type="text" class="form-control" name="S_LastName" required>
            </div>
            <div class="mb-3">
                <label for="Address">Address</label>
                <input type="S_Address" class="form-control" name="S_Address" required>
            </div>
            <div class="mb-3">
                <label for="SunjectName">SunjectName</label>
        <input type="text" class="form-control" name="S_SunjectName" required>
 </div>

 
 <button type="submit">Create</button>
 <a class="btn" href="index.php">Back</a>
</form>