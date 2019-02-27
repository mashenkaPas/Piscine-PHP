$(document).ready(function() {
    $("#addTodo").click(function() {
        var toDo = prompt("Create a todo:", "");
        if (toDo != null || toDo != "") {
            txt = toDo;
            $("#ft_list").prepend($('<div>' + txt +'</div>').click(function() {
                if (confirm("Do you want to delete the todo?"))      
                    this.remove();
            
            }));
        }
    });

});