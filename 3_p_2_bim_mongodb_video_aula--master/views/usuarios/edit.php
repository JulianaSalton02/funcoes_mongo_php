<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Atualizar  Usuário</h3>
    <div class="row">
        <form  method="POST" action="atualizar" class="col-lg-10">
           
        <?php foreach($cursor as $c) { ?>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="<?php  echo $c->cpf ?>">                   
                <input type="hidden" name="id" id="id" class="form-control" value="<?php  echo $c->_id ?>">                   
            </div>
                    
            <div class="form-group">
                <label for="nome"  >Nome Completo</label>
                <input type="text" name="nome" id="nome"  class="form-control" value="<?php  echo $c->nome ?>" />
            </div>
            
            <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="text" name="email" id="email"  class="form-control" value="<?php  echo $c->email ?>" />
            </div>
        
        <?php } ?>
           
       
            <div class="form-group">
                <a href="http://localhost/3_p_mongodb_video_aula/" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>
                
            </div>
        </form>
    </div>
</div>