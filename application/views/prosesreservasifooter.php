
    <?php foreach ($datamenu as $menu) : ?>
      <div class="form-group" hidden>
        <input type="text" name="nama_rm" class="form-control" value="<?php echo $menu->nama_rm;?>">
        </div>
        <div class="form-group" hidden>
        <input type="text" name="id_rm" class="form-control" value="<?php echo $menu->id_rm;?>">
        </div>        
        <?php endforeach ;?>
