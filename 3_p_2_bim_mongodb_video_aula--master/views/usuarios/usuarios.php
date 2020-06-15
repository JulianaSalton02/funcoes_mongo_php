<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col"> </th>
        </tr>
    </thead>
    <tbody>
   
    <?php foreach($data as $d) { ?> 
        <tr>
        
        <td><?php echo $d->cpf ?></td>
        <td><?php echo $d->nome ?></td>
        <td><?php echo $d->email ?></td>
        <td><a href="editar?id=<?php echo $d->_id ?>" class="bnt">Editar</a></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <div class="float-right"><a href="usuarios_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>