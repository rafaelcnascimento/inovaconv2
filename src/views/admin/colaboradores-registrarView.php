<?php include('cabecalhoAdmin.php'); ?>

   <div class="container">
       <center>
            <div class="panel-body">
               <form  method = "POST" action="/admin/colaboradores-registrar">
                   <div class="form-group">
                       <label for="email">Email do novo colaborador:</label>
                       <input type="email" class="form-control" name="email">
                   </div>
                   <button type="submit" class="btn btn-primary">Cadastrar</button>
               </form>
            </div>
            <?php if (isset($mensagem)): ?>
                <?=$mensagem?>
            <?php endif ?>
       </center>
   </div>    
<?php include('rodapeAdmin.php'); ?>
