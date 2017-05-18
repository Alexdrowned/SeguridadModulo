var creaFormUsu = function() {
    $("<section id='sec1'> <br/> <mark>Iniciar</mark> </section>").appendTo("body");
    $("<form id='form1' method='Post' action='../Programs/PHP/Home.php'> <br/> </form> ").appendTo("#sec1");
    $("<label>Usuario:  </label> ").appendTo("#form1");
    $("<input type='text' name='User'/> <br/>").appendTo("#form1");
    $("<label>Contraseña: </label>").appendTo("#form1");
    $("<input type='text' name='Password'/> <br/>").appendTo("#form1");
    $("<input type='submit' value='Iniciar Sesion'/>").appendTo("#form1");
    $("#iniciarSesion").remove();
}
var creaFormNew = function() {
    $("<section id='sec2'> <br/> <mark>Registrar Usuario</mark> </section>").appendTo("body");
    $("<form id='form2' method='Post' action='../Programs/PHP/Home.php'> <br/> </form> ").appendTo("#sec2");
    $("<label>Nombre de Usuario:  </label> ").appendTo("#form2");
    $("<input type='text' name='UserR'/> Solo se permiten caracteres y números y menos de 20 caracteres<br/>").appendTo("#form2");
    $("<label>Ingrese su Contraseña: </label>").appendTo("#form2");
    $("<input type='text' name='PasswordR'/> Solo menos de 20 caracteres <br/>").appendTo("#form2");
    $("<input type='submit' value='Registrar'/>").appendTo("#form2");
    $("#registrar").remove();
}
var crearInput = $("#iniciarSesion");
var creaRegistro = $("#registrar");
crearInput.click(creaFormUsu);
creaRegistro.click(creaFormNew);
