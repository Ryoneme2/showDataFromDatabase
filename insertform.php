<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-3">
        <h1 class="text-center">FORM EMPLOYEES</h1>
    <form action="insertData.php" method="POST">
    <div class="form-group">
    <label for="fname">NAME<label>
    <input type="text" name="NAME" id="" class="form-control my-2">
    </div>
    <div class="form-group">
    <label for="lname">SERNAME<label>
    <input type="text" name="SERNAME" id="" class="form-control my-2">
    </div>
    <div class="form-group">
    <label for="gender">GENDER<label><br>
    <input type="radio" name="GENDER" value="male">MAN
    <input type="radio" name="GENDER" value="female">WOMAM
    <input type="radio" name="GENDER" value="other">OTHER
    </div>
    <div class="form-group">
    <label for="skill">SKILL<label><br>
    <input type="checkbox" name="SKILL[]" value="C">C
    <input type="checkbox" name="SKILL[]" value="C++">C++
    <input type="checkbox" name="SKILL[]" value="C#">C#
    <input type="checkbox" name="SKILL[]" value="Python">Python
    <input type="checkbox" name="SKILL[]" value="Java">Java
    <input type="checkbox" name="SKILL[]" value="JavaScrit">JavaScrit
    <input type="checkbox" name="SKILL[]" value="HTML">HTML
    <input type="checkbox" name="SKILL[]" value="CSS">CSS
    <input type="checkbox" name="SKILL[]" value="PHP">PHP
    <input type="checkbox" name="SKILL[]" value="Ruby">Ruby
    </div>
    <input type="submit" value="SAVE" class="btn btn-success">
    <input type="reset" value="DISCARD" class="btn btn-danger">
    <a href="./index.php" class="btn btn-primary">BACK</a>
    </form>
    
    </div>

</body>
</html>