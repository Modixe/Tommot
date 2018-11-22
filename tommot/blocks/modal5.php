<div id="modal_window5" class="modal_window">
  <span id="window_close5"  class="window_close">X</span>
  <h2>Список подключенных домов</h2>
  <p>
  	<?php 

  	$dbc = mysqli_connect('localhost', 'root', '','intom');
  $dbc->set_charset('utf8');
  $sql = 'SELECT * FROM `address`';
  // выбрать все наши строки из таблици ava
  $result = mysqli_query($dbc, $sql);
  $ava = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($ava as $dbc):
            ?><option ><?=$dbc["address"]?></option>
            <?php endforeach; ?>
        </p>
</div>
