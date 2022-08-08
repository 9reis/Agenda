<?php
include_once('templates/header.php')

?>

<div class="container">
    <?php include_once("templates/backbtn.html"); ?>

    <h1 id="main-title">Novo Contato</h1>

    <form action="<?= $BASE_URL ?>config/process.php"  id="create-form" method="POST">

    <input type="hidden" name="type" value="create">

    <div class="form-group">
        <label for="name"">Nome do contato:</label>
        <input type="text" class="form-control mt-1" name="name" id="name" placeholder="Digite o nome" required>
    </div>

    <div class="form-group">
        <label for="phone" class="mt-3">Telefone do contato:</label>
        <input type="text" class="form-control mt-1" name="phone" id="phone" placeholder="Digite o telefone" required>
    </div>

    <div class="form-group">
        <label for="observations" class="mt-3" >Observações:</label>
        <textarea type="text" rows="3" class="form-control mt-1" name="observations" id="observations" placeholder="Digite as observações"></textarea>
    </div>

    <button type="submit" class="btn mt-3">Cadastrar</button>

    </form>
</div>
    
    

<?php
include_once('templates/footer.php')

?>