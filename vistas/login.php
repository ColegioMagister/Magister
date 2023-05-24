<div class="card-body">
    <form role="form" class="text-start" method="POST" action="">
        <div class="input-group input-group-outline mt-4 mb-5 ">
            <label class="form-label">USUARIO</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="input-group input-group-outline  mb-3">
            <label class="form-label">CONTRASEÑA</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-3">Iniciar sesion</button>
        </p>
        <?php
            if(isset($_POST['username']) && isset($_POST['password'])){
                require_once "php/config.php";
                require_once "php/iniciar_sesion.php";
            }
        ?>                        
                
    </form>
</div>