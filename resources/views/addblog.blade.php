<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/storedata" method = "post" enctype='multipart/form-data'>
  @csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Title</b></label>
    <input type="text" placeholder="Enter Title" name="title" id="title" required>

    <label for="psw"><b>description</b></label>
    <input type="text" placeholder="Enter description" name="description" id="" required>

    <label for="psw-repeat"><b>Start Date</b></label>
    <input type="date" placeholder="start date" name="start_date" id="" required>
    <label for="psw-repeat"><b>End Date</b></label>
    <input type="date" placeholder="end date" name="end_date" id="" required>
    <label for="psw"><b>image</b></label>
    <input type="file" placeholder="Enter image" name="image" id="" required>
    <hr>
    <p>Create your blog </p>

    <button type="submit" class="registerbtn">Submit</button>
  </div>
  
 
</form>

</body>
</html>
