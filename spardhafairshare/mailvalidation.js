<html>
<head>
<script>
function validateemail()
{
var x=document.myform.email.value;
var atposition=x.indexOf("@");
var dotposition=x.lastIndexOf(".");
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
{
alert("please enter a valid email address \n atposition:"+atposition+" \n dotposition:"+dotposition);
return false;
}
else
{
document.write("you have entered a valid email id")
}
}
</script>
</head>
<body>
<form name="myform" method="post" action="#" onsubmit="return validateemail();">
email:<input type="text" name="email"><br>
<input type="submit" value="register">
</form>
</body>
</html>