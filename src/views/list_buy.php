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
                        <td><?= 'R$ '. $price['price']; ?></td>
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
            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination justify-content-center">
                    <?php for($i = 1; $i <= $number_of_page; $i++): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?echo $i?>"><?echo $i?></a></li>
                    <?php endfor ?>
                </ul>
            </nav>
        </div>
    </div>
