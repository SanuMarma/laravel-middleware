<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
    body
{
    
    font-family:JF Flat;
    color:#5687C4;
}
body#LoginForm{ background-image:url("http://www.teneriffedoctors.com.au/wp-content/uploads/doctor_banner.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
body#LoginForm {
  margin:auto;
  padding-bottom: 272px;
}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}

.img
{
    width:80px;
    height:75px;
}
.input-group input[type="email"]
{
    font-weight:bolder;
    color:#5687C4;
    background-color:#DBE3ED;
    width:420px;
}
.input-group input[type="password"]
{
    font-weight:bolder;
    color:#5687C4;
    background-color:#DBE3ED;
    width:300px;
}
div >label
{
    font-size:14pt;
    color:#5687C4;
}
label#remember
{
    font-size:12pt;
    padding-left:35px;
}
</style>

<body id="LoginForm">
  <div class="container">
  <div class="row">
    
    <h3> Medical Login Form</h3>
  </div>
  <p>Please enter your email and password</p>
   <form id="Login" method="post" action="{{ URL::to('loginStore')}}">{{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <h2><img class="img-circle img" src="http://icons.iconarchive.com/icons/iconshock/super-vista-medical/256/stethoscope-icon.png"/>Login our system</h2>
        </div>
        <div class="row">
           <div class="form-group">
               <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                <div class="input-group">
                   <span class="input-group-btn">
                        <button class="btn btn-primary glyphicon glyphicon-envelope" type="button"></button>
                    </span>
                   <input type="email" class="form-control" name="email" placeholder="Email">
                </div>  
           </div>
        </div>  
        <div class="row">
           <div class="form-group">
               <label for="inputPassword" class="col-sm-2 control-label">Password:</label>
               <div class="input-group">
                   <span class="input-group-btn">
                        <button class="btn btn-primary glyphicon glyphicon-eye-close" type="button"></button>
                    </span>
                    <input type="Password" class="form-control" name="password" placeholder="Password">  
               </div>
            </div>     
        </div>
       
        <div class="row">
        <div class="col-sm-6"></div>
            <button type="submit" class="col-sm-1 btn btn-primary btn-lg active" role="button">Login</button>
        </div>
       
    </div>
  </form>
  </div>
</body>  
