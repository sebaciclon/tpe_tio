{include 'header.tpl'}
    <form action="registrarse" method="POST">
        <h1>REGISTRARSE</h1>    
        <input type="text" placeholder="Nombre Completo" name="name">
        <input type="text" placeholder="Nombre de Usuario" name="username">
        <input type="password" placeholder="Contraseña" name="psw">
        <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
    </form>
{include 'footer.tpl'}