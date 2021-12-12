

    <div class="formbox" style="padding: 10px 40px;">
        <h3 class="text-center mt-3" >Cadastro de produto</h3>
        <?php include(TEMPLATE_PATH . "/messages.php"); ?>
        <form class="" style="width:100%" method="post" action="insert.php">
            <div class="form-group ">
            <label for="productName">Nome do Produto</label>
            <input type="text" class="form-control" id="productName" name="product_name" placeholder="Feijão" required>
            </div>
            <div class="form-group ">
            <label for="price">Valor do Produto</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="7.89 -- utilize . para separar a casa decimal" required> 
            </div>
            <div class="form-group ">
                <label for="category">Categoria</label>
                <select class="form-control" id="category" name="category" required>
                <option>Alimentação</option>
                <option>Vestuário</option>
                <option>Limpeza</option>
                <option>Outros</option>
                </select>
            <div class="form-group ">
                <label for="perishable">Perecível</label>
                <select class="form-control" id="perishable" name="perishable" required>
                <option>Sim</option>
                <option>Não</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Comprar</button>
        </form>
    </div>
    

        