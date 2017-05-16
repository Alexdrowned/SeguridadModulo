var creaFormUsu = function() {
    $("<section> <br/> <mark>Iniciar Sesion </mark>").appendTo("body");
    $("<form method='Post'> <br/>").appendTo("body");
    $("<label>Usuario: </label> ").appendTo("body");
    $("<input type='text' name='User'/> <br/>").appendTo("body");
    $("<label>Contraseña: </label>").appendTo("body");
    $("<input type='text' name='Password'/> <br/>").appendTo("body");
    $("<input type='submit' value='Iniciar'/>").appendTo("body");
    $("</form>").appendTo("body");
    $("</section>");
    $("#iniciarSesion").remove();
}
var creaFormNew = function() {
    $("<section> <br/> <mark>Registrar Usuario</mark>").appendTo("body");
    $("<form method='Post'> <br/>").appendTo("body");
    $("<label>Nombre de Usuario:  </label> ").appendTo("body");
    $("<input type='text' name='UserR'/> <br/>").appendTo("body");
    $("<label>Ingrese su Contraseña </label>").appendTo("body");
    $("<input type='text' name='PasswordR'/> <br/>").appendTo("body");
    $("<input type='submit' value='Registrar'/>").appendTo("body");
    $("</form>").appendTo("body");
    $("</section>");
    $("#registrar").remove();
}
var crearInput = $("#iniciarSesion");
var creaRegistro = $("#registrar");
crearInput.click(creaFormUsu);
creaRegistro.click(creaFormNew);
