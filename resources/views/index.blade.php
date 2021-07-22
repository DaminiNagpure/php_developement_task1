<!DOCTYPE>
<html>
</body>
<div class="login-container">
  <h1 style="color:hotpink"> User Login!</h1>
    <form action="index" method="POST">
       @csrf
       Email
       <input type="text" name="email" placeholder="enter email id"><br>
       <span style="color:red">@error('email'){{$message}}@enderror</span><br><br>
       Pasword:
       <input type="password" name="password" placeholder="enter password"><br>
       <span style="color:red">@error('password'){{$message}}@enderror</span><br><br>
       <button style="background-color:green color:white padding:100% font-size:25px "type="submit">Login!</button><br><br>
       <a href="\login" style="font-size:20px"><b>If new user click here to Register!</b></a>
    </form>
</div>
    <style>
      .login-container{
      float: center;
      text-align: center;
      padding: 10px;
      margin-top: 80px;
      margin-right: 450px;
      margin-left:450px;
      background: #ddd;
      font-size: 20px;
      border: none;
      cursor: pointer;
}
   button{
        background-color:#00aaff;
        color:white ;
        padding:10px;
        font-size:20px;
        border-radius:8px;
        box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px rgba(0,0,0,0.19);
        margin: 8px;
   }
</style>
</body>
</html>
