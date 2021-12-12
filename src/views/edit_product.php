<div class="formbox" style="padding: 10px 40px;">
        <h3 class="text-center mt-3" >Editar produto cadastrado</h3>
        <?php include(TEMPLATE_PATH . "/messages.php"); ?>
        
        <?php foreach($result as $registry): ?>
        <form class="" style="width:100%" method="post" action="edit_up.php">
            <input type="hidden" name="id" value="<?= $registry['id'] ?>"> 
            <div class="form-group ">
                <label for="productName">Nome do Produto</label>
                <input 
                type="text" 
                class="form-control" 
                id="productName" 
                name="product_name" 
                placeholder="Feijão" 
                value="<?= $registry['product_name']; ?>" 
                required >
            </div>
            <div class="form-group ">
            <label for="price">Valor do Produto</label>
            <input 
                type="text" 
                class="form-control" 
                id="price" name="price" 
                placeholder="7,89" 
                value="<?= $registry['price']; ?>"
                required> 
            </div>
            <div class="form-group ">
                <label for="category">Categoria</label>
                <select class="form-control" id="category" name="category" value="<?= $registry['category']; ?>" required>
                <option>Alimentação</option>
                <option>Vestuário</option>
                <option>Limpeza</option>
                <option>Outros</option>
                </select>
            <div class="form-group ">
                <label for="perishable">Perecível</label>
                <select class="form-control" id="perishable" name="perishable" value="<?= $registry['perishable']; ?>" required>
                <option>Sim</option>
                <option>Não</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        <?php endforeach ?>
    </div>