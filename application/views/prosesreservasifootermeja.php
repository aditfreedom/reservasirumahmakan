
        <div class="form-group">
        <label for="">Nomor Meja</label>
        <select class="form-control form-control" name="no_meja">
        <?php foreach ($datamenu as $menu) : ?>
          <option value="<?php echo $menu->no_meja;?>"><?php echo $menu->no_meja;?> (Kapasitas : <?php echo $menu->kapasitas;?> Orang)</option>
          <?php endforeach ;?>
          </select>
        </div>
        </div>
