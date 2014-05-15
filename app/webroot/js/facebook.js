  function loginFb(){
     FB.api('/me', function(response) {
          var request = $.ajax({
            url: "/login-by-facebook",
            type: "POST",
            data: {
              fbID : response.id,
              name : response.last_name,
              firstname : response.first_name,
              email : response.email
            },
            dataType: "html"
          });

          request.done(function( msg ) {
            document.location.href="/me"
          });
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '245395472314748',
      cookie     : true,  
      xfbml      : true,  
      version    : 'v2.0' 
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  $(document).ready(function() {
    jQuery('#fbconnect').on('click', function(){
      FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
          loginFb();
        }
        else {
          FB.login(function(){loginFb();}, {scope: 'email', return_scopes: true});
        }

       
      });
    });
  });