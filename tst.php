<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
	padding-left:px;
	
}
ul p{
	float:left;
	
	
}
li {
    float: left;
	padding-left:50px;
	
	
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
li a, .dropbtn1 {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
}

li a:hover, .dropdown1:hover .dropbtn1 {
    background-color: red;
}

li.dropdown1 {
    display: inline-block;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content1 a:hover {background-color: #f1f1f1}

.dropdown1:hover .dropdown-content1 {
    display: block;
}
li a, .dropbtn2{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
}

li a:hover, .dropdown2:hover .dropbtn2 {
    background-color: red;
}

li.dropdown2 {
    display: inline-block;
}

.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content2 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content2 a:hover {background-color: #f1f1f1}

.dropdown2:hover .dropdown-content2 {
    display: block;
}
#logo{width:200px;height:80px;float:left;padding-left:10px;}
</style>
</head>
<body>


</style>
</head>


<ul>

</style>
</head>
<div id="logo"><img src="logo.jpg" height="80px" width="200px" /></div>
<li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn1">Faculty</a>
    <div class="dropdown-content1">
      <a href="#">Add Faculty</a>
      <a href="#">Courses</a>
      <a href="#">Faculty_list</a>
    </div>
  <li class="dropdown2">
    <a href="javascript:void(0)" class="dropbtn2">Students</a>
    <div class="dropdown-content2">
      <a href="Add stud.php">Add Students</a>
      <a href="#">view students</a>
      <a href="#">Faculty_list</a>
    </div>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#">Admin</a>
      <a href="#">Faculty</a>
      <a href="#">Students</a>
    </div>
  </li>
</ul>

<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>

</body>
</html>
