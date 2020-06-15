<div class="container">
    <table class="table">
    <thead>
        <tr>
      
        <th scope="col">Marca</th>
        <th scope="col">Descrição</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
   
    <?php foreach($data as $d){ ?>
    
        <tr>
        
        <td><?php echo $d->marca ?></td>
        <td><?php echo $d->descricao ?></td>
        <td><a href="marcas?id=<?php echo $d->_d ?>" class="bnt"><img src="assets/svg/editar.svg" style="width:1em;height:auto"></a></td>
        </tr>
        <tr>
        
    <?php } ?>  
    </tbody>
    </table>
    <div class="float-right"><a href="marcas_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"></a></div>
</div>