      function signUpActive()
      {
          var buttons=document.querySelectorAll(".btn-group button");
          buttons[0].style.background="rgb(173, 201, 202)";
          buttons[0].style.color="rgb(42, 168, 218)";
          buttons[1].style.background="skyblue";
          buttons[1].style.color="white";
          buttons[1].style.boxShadow="0 4px 8px 0 rgba(0,0,0,0.2), 0 3px 10px 0 rgba(0,0,0,0.19)";
          buttons[0].style.boxShadow="none";
          var login=document.getElementById("login");
          var sign=document.getElementById("signUp");
          $("#login").hide();
          $("#signUp").show();

      }
      
      function loginActive()
      {
          var buttons=document.querySelectorAll(".btn-group button");
          buttons[1].style.background="rgb(173, 201, 202)";
          buttons[1].style.color="rgb(42, 168, 218)";
          buttons[0].style.background="skyblue";
          buttons[0].style.color="white";
          buttons[0].style.boxShadow="0 4px 8px 0 rgba(0,0,0,0.2), 0 3px 10px 0 rgba(0,0,0,0.19)";
          buttons[1].style.boxShadow="none";
          var login=document.getElementById("login");
          var sign=document.getElementById("signUp");
          $("#login").show();
          $("#signUp").hide();
      }
