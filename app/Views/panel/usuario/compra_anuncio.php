<?php echo $this->extend('plantilla/layout_panel')?>

<?php echo $this->section('contenido_panel');?>

<div class="row">
    <div class="col-sm-12">
        <h4 class="p-2 text-white text-center bg-success">Comprar más anuncios</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <p class="fw-bold">Precios</p>
        <ul class="list-group">
            <?php
            if( $preciosAnuncios ){
                /* echo "<pre>";
                print_r($preciosAnuncios);
                echo "</pre>"; */
                foreach( $preciosAnuncios as $pre ){
                    $idprecio    = $pre['idprecio'];
                    $item        = $pre['item'];
                    $cantidad    = $pre['cantidad'];
                    $precio      = $pre['precio'];
                    $flag        = $pre['flag'];
                    $descripcion = $pre['descripcion'];
                ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div>
                        <input class="form-check-input me-1" type="radio" name="listPrecio" value="<?=$idprecio?>" id="radio-<?=$idprecio?>">
                        <label class="form-check-label" for="radio-<?=$idprecio?>"><?=$item?></label>
                    </div>
                    <span class="badge text-bg-success rounded-pill fs-6">S/. <?=$precio?></span>
                </li>
                <?php
                }
            }
            ?>
        </ul>
    </div>
    <div class="col-sm-6">
        
    </div>
</div>

<?php echo $this->endSection();?>

<?php echo $this->section('scriptsPanel');?>

<script>
$(function(){
    
});
</script>

<?php echo $this->endSection();?>