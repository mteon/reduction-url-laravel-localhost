<?php $__env->startSection('content'); ?>
	<h1>Creer un nouveau lien</h1>

	<form action="" method="post">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<div class="form-group">
			<label for="url">Lien a raccourcir</label><br>
			<input type="text" name="url" id="url" placeholder="http://www.google.com" 
			class="form-control"> <br><br>
			<button class="btn btn-primary" name="cutLinkButton" id="cutLinkButton">Raccourcir</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspaces\eclipse-php\tp-raccourcisseur-url\resources\views/links/create.blade.php ENDPATH**/ ?>