<p><b>Nome:</b> <?php echo $user->name; ?></p>
<p><b>CPF:</b> <?php echo $user->cpf; ?></p>
<p>
	<b>Categoria: </b>
	<?php if($user->type=='administrator'): ?>
		Administrador
	<?php elseif($user->type=='coordinator'): ?>
		Coordenador
	<?php elseif($user->type=='instructor'): ?>
		Docente
	<?php elseif($user->type=='student'): ?>
		Discente
	<?php elseif($user->type=='noacademic'): ?>
		Sem vínculo acadêmico
	<?php endif; ?>
</p>
<p><b>Email:</b> <?php echo $user->email; ?></p>
<p><b>Telefone:</b> <?php echo $user->phone; ?></p>
<p><b>Instituição:</b> <?php echo $user->institution; ?></p>
<p>
    <b>Situação do pagamento:</b> 
    
    <?php if($user->paid=='no'): ?>
        Ainda não enviou o comprovante
    <?php elseif($user->paid=='pendent'): ?>
        Comprovante esperando avaliação
    <?php elseif($user->paid=='accepted'): ?>
        Pago
    <?php endif; ?>
    
</p>
