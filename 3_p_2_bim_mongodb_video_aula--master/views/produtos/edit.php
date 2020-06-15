<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Adicionar Novo Usuário</h3>
    <div class="row">
        <form  method="POST" action="produtos_save" class="col-lg-10">
          
            <div class="form-group">
                    <label for="produto">Produto</label>
                <input type="text" name="produto" id="produto" class="form-control" 
                value="<?php echo $produtos->show->produto ?>">                   
            </div>
                    
            <div class="form-group">
                <label for="marca"  >Marca</label>
                <select  name="marca" id="marca"  class="form-control" >
                
                    <option value="<?php echo $produtos->show->marcas->_id ?>"><?php echo $produtos->show->marcas->marca ?></option>

                
                </select>
            </div>
            
            <div class="form-group">
                    <label for="perco" >Preço</label>
                    <input type="number" step="any" name="perco" id="perco"  class="form-control" value="<?php echo $produtos->show->preco ?>" />
            </div>
        
          
              
       
            <div class="form-group">
                <a href="produtos" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>
                
            </div>
        </form>
    </div>
</div>