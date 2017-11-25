<?php

echo '<option value="">Selecione a cidade</option>\n';
foreach ($cidades as $id => $cidade)
    echo "<option value='$id'>".utf8_encode($cidade)."</option>\n";
?> 