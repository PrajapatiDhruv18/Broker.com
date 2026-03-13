<!DOCTYPE html>
<html>
<head>
<title>Broker Website</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI;
}

body{
height:100vh;
background:#eef2f7;
display:flex;
justify-content:center;
align-items:center;
}

/* CONTAINER */
.container{
width:400px;
background:#f3f3f3;
border-radius:18px;
box-shadow:0 20px 60px rgba(0,0,0,0.15);
overflow:hidden;
}

/* TABS */
.tab{
display:flex;
}

.tab button{
width:50%;
padding:16px;
border:none;
cursor:pointer;
font-weight:600;
font-size:16px;
background:#dcdcdc;
transition:0.3s;
}

.tab button.active{
background:linear-gradient(135deg,#3a6bff,#2a63ff);
color:#fff;
}

/* FORM AREA */
.form{
display:none;
padding:35px 30px;
}

.form.active{
display:block;
}

h2{
margin-bottom:25px;
font-size:24px;
font-weight:700;
}

/* INPUT DESIGN */
input{
width:100%;
padding:14px 18px;
margin-bottom:18px;
border-radius:30px;
border:1px solid #ddd;
background:#fff;
outline:none;
font-size:14px;
transition:0.3s;
}

input:focus{
border-color:#2a63ff;
box-shadow:0 0 0 3px rgba(42,99,255,0.1);
}

/* BUTTON */
button.submit-btn{
width:100%;
padding:14px;
border-radius:30px;
border:none;
background:linear-gradient(135deg,#2a63ff,#1877f2);
color:#fff;
font-size:16px;
font-weight:600;
cursor:pointer;
transition:0.3s;
}

button.submit-btn:hover{
opacity:0.9;
}

/* SNACKBAR (same as yours but slightly smooth) */
#snackbar{
position:fixed;
top:20px;
left:50%;
transform:translateX(-50%) translateY(-30px);
min-width:280px;
max-width:90%;
padding:16px 22px;
border-radius:14px;
color:#fff;
font-size:15px;
font-weight:500;
box-shadow:0 15px 40px rgba(0,0,0,.25);
opacity:0;
z-index:9999;
transition:.4s;
pointer-events:none;
}

#snackbar.show{
opacity:1;
transform:translateX(-50%) translateY(0);
}

#snackbar.success{background:linear-gradient(135deg,#00c851,#00a63f);}
#snackbar.error{background:linear-gradient(135deg,#ff4444,#cc0000);}
#snackbar.info{background:linear-gradient(135deg,#2196f3,#0b7dda);}
</style>

</head>
<body>

<div class="container">

<div class="tab">
<button id="loginTab" class="active">Login</button>
<button id="registerTab">Register</button>
</div>

<!-- LOGIN -->
<div id="loginForm" class="form active">
<h2>User Login</h2>

<form method="POST" action="login.php">
<input type="email" name="login_email" placeholder="Email" required>
<input type="password" name="login_password" placeholder="Password" required>
<button type="submit" name="login_btn" class="submit-btn">Login</button>
</form>

</div>



<!-- REGISTER -->
<div id="registerForm" class="form">
<h2>User Register</h2>

<form id="regForm">
<input type="text" name="fullname" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<input type="password" name="c_password" placeholder="Confirm Password" required>
<button type="submit" class="submit-btn">Register</button>
</form>

</div>

</div>

<!-- SNACKBAR -->
<div id="snackbar"></div>

<script>

/* TAB SWITCH */
const loginTab=document.getElementById("loginTab");
const registerTab=document.getElementById("registerTab");
const loginForm=document.getElementById("loginForm");
const registerForm=document.getElementById("registerForm");

loginTab.onclick=()=>{
loginTab.classList.add("active");
registerTab.classList.remove("active");
loginForm.classList.add("active");
registerForm.classList.remove("active");
}

registerTab.onclick=()=>{
registerTab.classList.add("active");
loginTab.classList.remove("active");
registerForm.classList.add("active");
loginForm.classList.remove("active");
}


/* REGISTER AJAX */
document.getElementById("regForm").addEventListener("submit",function(e){
e.preventDefault();

let formData=new FormData(this);
formData.append("reg_btn",1);

let xhr=new XMLHttpRequest();
xhr.open("POST","insert.php",true);

xhr.onload=function(){

if(xhr.responseText.toLowerCase().includes("success")){

showSnackbar("Registration Successful 🎉","success");
document.getElementById("regForm").reset();
loginTab.click();

}else{
showSnackbar(xhr.responseText,"error");
}

};

xhr.send(formData);
});


/* SNACKBAR FUNCTION */
function showSnackbar(message,type="success",duration=3000){

const sb=document.getElementById("snackbar");

sb.className="";
sb.classList.add("show",type);
sb.textContent=message;

setTimeout(()=>{
sb.classList.remove("show");
},duration);

}

</script>

</body>
</html>