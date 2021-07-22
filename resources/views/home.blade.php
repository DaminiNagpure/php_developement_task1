<!DOCTYPE>
<html>
</body>
<div class="login-container">
   <h1>Your Profile Page!</h1>
   <h2 style="color:#F32E8E">Hello {{Session('students')}}</h3><br><br>
   <a href="/logout"><button>Logout!</button></a>
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
    background-color: #ff3333;
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