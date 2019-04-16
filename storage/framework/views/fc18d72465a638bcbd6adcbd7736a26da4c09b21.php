<?php $__env->startSection('content'); ?> 
<h1>BRAVO, VOTRE LIEN A ETE RACCOURCI</h1>

	<p>
		<a class="btn btn-primary" 
		href="<?php echo e(action('LinksController@show', ['id' => $link->id])); ?>">
			<?php echo e(action('LinksController@show', ['id' => $link->id])); ?>

		</a>
	</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspaces\eclipse-php\tp-raccourcisseur-url\resources\views/links/success.blade.php ENDPATH**/ ?>