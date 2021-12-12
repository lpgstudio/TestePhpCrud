    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Lista dos produtos comprados</h2>
            </div>
            <?php include(TEMPLATE_PATH . "/messages.php"); ?>
            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Data</td>
                        <td>Produto</td>
                        <td>Valor</td>
                        <td>Categoria</td>
                        <td>Perecível</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    
                <?php foreach($result as $registry): ?>
                    <tr>
                        <td><?= $registry['id'] ?></td>
                        <td><?= formatDateWithLocale($registry['buy_date'], '%d/%m/%Y - ').$registry['buy_hour'] ?></td>
                        <td><?= $registry['product_name'] ?></td>
                        <td><?= 'R$ '.$registry['price'] ?></td>
                        <td><?= $registry['category'] ?></td>
                        <td><?= $registry['perishable'] ?></td>
                        <td>
                            <a href="edit.php?codigo=<?= $registry['id'] ?>"><i class="fas fa-edit"></i></a>
                            <a href="delete.php?excluir=<?= $registry['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
