
<!DOCTYPE>
<html>
<body>
  <div class="login-container">
    <h1 style="color:blue"> User Registration!</h1>
    <form action="users" method="POST">
       @csrf
       Name: 
       <input type="text" name="username" placeholder="enter username"><br>
       <span style="color:red">@error('username'){{$message}}@enderror</span><br><br>
       Email:
       <input type="text" name="email" placeholder="enter email id"><br>
       <span style="color:red">@error('email'){{$message}}@enderror</span><br><br>
       Paasword:
       <input type="password" name="password" placeholder="enter password"><br>
       <span style="color:red">@error('password'){{$message}}@enderror</span><br><br>
       <button type="submit">Register!</button>
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
        background-color:#00b3b3;
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

