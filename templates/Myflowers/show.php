<table>
    <tr>
        <th>Nome fiore</th>
        <th>Occasione</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>quantità</th>
    </tr>
    <?php

    foreach ($fiorellini as $fiorellino) {
        /*
        echo '<pre>';
        var_dump($fiorellino);
        */
    ?>
        <tr>
            <td><?= $fiorellino["name"]?></td>
            <td><?= $fiorellino["occasion"]["name"]?></td>
            <td><?= $fiorellino["occasion"]["description"]?></td>
            <td><?= $fiorellino["price"]?></td>
            <td><?= $fiorellino["qty"]?></td>
        </tr>





    <?php } ?>
</table>