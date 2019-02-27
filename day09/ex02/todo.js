function deleteTodo(toDelete) {
    if (confirm("Do you want to delete the todo?"))
        toDelete.parentNode.removeChild(toDelete);
  }

  function createTodo() {
    var txt;
    var toDo = prompt("Create a todo:", "");
    
    if (toDo != null || toDo != "") {
      txt = toDo;
    }
    var newDiv = document.createElement("div");
    var divAppendTo = document.getElementById("ft_list");

    newDiv.onclick = () => deleteTodo(newDiv);
    newDiv.innerHTML = toDo;
    divAppendTo.insertBefore(newDiv, divAppendTo.firstChild);
  }


//   function setCookie(cname, cvalue, exdays) {
//     var d = new Date();
//     d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
//     var expires = "expires="+d.toUTCString();
//     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
//   }

//   function getCookie(cname) {
//     var name = cname + "=";
//     var ca = document.cookie.split(';');
//     for(var i = 0; i < ca.length; i++) {
//       var c = ca[i];
//       while (c.charAt(0) == ' ') {
//         c = c.substring(1);
//       }
//       if (c.indexOf(name) == 0) {
//         return c.substring(name.length, c.length);
//       }
//     }
//     return "";
//   }
//   Response.AddHeader("Set-Cookie", "CookieName=CookieValue; path=/;");
//   Response.SetCookie(new HttpCookie("session-id") { Value = Guid.NewGuid().ToString(), HttpOnly = false });
//   Response.SetCookie(new HttpCookie("user-name") { Value = data.Login, HttpOnly = false });
//   document.cookie = "name=oeschger";
// document.cookie = "favorite_food=tripe";
// function alertCookie() {
//     document.cookie = "name=oeschger";
//   alert(document.cookie);
// }

//   console.log(getCookie("name"));
  