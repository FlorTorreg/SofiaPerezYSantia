<!-- Entras a login.php
Te logueas con fb (espera, el boton puede tardar dos segundos en cargar)
Copias de la consola el access_token
Lo pegas en index.php en la variable $ACCESS_TOKEN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId      : '2173803612921937',
            cookie     : true,
            xfbml      : true,
            version    : 'v5.0'
            });
            
            FB.AppEvents.logPageView();  

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        };

        (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        

        

        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

        function statusChangeCallback(res){
            console.log("hola", res);
        }

        function loginFacebook(){
            FB.login(function(response) {
                statusChangeCallback(response);
            }, {scope: 'public_profile,email,instagram_basic,pages_show_list,instagram_manage_insights'}, {auth_type: 'reauthorize'});
        }
        </script>
        <!--<button onclick="loginFacebook()">Log In</button>-->
        <fb:login-button 
        scope="public_profile,email,instagram_basic,pages_show_list,instagram_manage_insights"
        onlogin="checkLoginState();">
      </fb:login-button>

      <!-- EAAe5EBgo4FEBALtLuYwYelupUGRZCvHcqcopOv0XVBV0Wl7vLRBmVySuBShBlNZAK7eXRsaq7AD5BnmF9GKhTx6H02p8wqqcVnYRApL4aaNIJJPWZC9noWsAM4uZCDbxnM3GIHHYXr8DcvjuJxW1MpnQwXRQe90xt5Lo3hhSsz3ZBJEZA2ZAWWmomSQZBxhTL9HWPGZBzGvTMYwZDZD -->
</body>
</html>