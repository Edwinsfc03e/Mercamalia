<?php 
include'global/config.php'; 
include'global/conexion.php';
include'carrito.php';
include'templates/cabecera.php';

?>

        <br>
        <?php if($mensaje){ ?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje;?>
            <a href="#" class="badge badge-success">ver carrito</a>
        </div>
        <?php } ?>
        <div class="row">
        <?php
        $sentencia =$pdo->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos)
        
        ?>


        <?php foreach ($listaProductos as $producto) {?>
            <div class="col-3">
                <div class="card">
                    <img
                    class="card-img-top" 
                    src="<?php echo $producto['img']?>"
                    height="317px"
                    >
                    <div class="card-body">
                        <span><?php echo $producto['nom']?></span>
                        <h5 class="card-title">$<?php echo $producto['pre']?></h5>
                        <p class="card-text">Descripcion</p>
                        <form action="" method="POST">

                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY) ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nom'],COD,KEY)?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['pre'],COD,KEY)?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY)?>">
                          <button class="btn btn-primary" type="submit" name="btnAccion" value="Agregar">
                            Agregar al carrito
                        </button>  
                        </form>
                        
                    </div>
                </div>
            </div>
       <?php }?>
    </div>
    <?php include'templates/pie.php'?>
