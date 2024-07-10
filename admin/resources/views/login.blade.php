<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="{{ asset('assets/img/logocabinet.png') }}" type="image/png">
   <title>Login For Html Css</title>
   <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>

<body>
   <div class="login-form">
      <div class="container">
         <div class="main">
            <div class="content">
               <div style="display: flex; justify-content: center; align-items: center;">
                  <img src="assets/img/logocabinet.png" style="width: 45px;" alt="Drasma Ebkali Image">
               </div>
               <div style="display: flex; justify-content: center; align-items: center;">
                  <h3 >Bienvenue  !</h3>

               </div>

               
               <form action="{{ route('dashboard') }}" method="">
                  <div class="form-group">
                     <label for="username">Email:</label>
                     <br>
                     <input type="text" id="username" name="username" placeholder="Enter your email" required autofocus>
                  </div>
                  <div class="form-group">
                     <label for="password">Mot De Passe:</label>
                     <br>
                     <input type="password" id="password" name="password" placeholder="Enter your password" required>
                  </div>
                  <br>
                  <a href="{{ route('dashboard') }}" ><button class="btn" >Login</button></a>
               </form>
            </div>
            <div class="form-img">
               <img src="assets/img/drasmaebkali.jpeg" alt="Drasma Ebkali Image">
            </div>
         </div>
      </div>
   </div>
</body>

</html>