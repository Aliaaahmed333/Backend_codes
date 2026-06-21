<?php $__env->startSection('title','Single Blog'); ?>

<?php $__env->startSection('content'); ?>

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <?php if (isset($component)) { $__componentOriginal45125a375f5fa90d7c0a0242067a61c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45125a375f5fa90d7c0a0242067a61c1 = $attributes; } ?>
<?php $component = App\View\Components\SingleBlogContentComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('single-blog-content-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SingleBlogContentComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45125a375f5fa90d7c0a0242067a61c1)): ?>
<?php $attributes = $__attributesOriginal45125a375f5fa90d7c0a0242067a61c1; ?>
<?php unset($__attributesOriginal45125a375f5fa90d7c0a0242067a61c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45125a375f5fa90d7c0a0242067a61c1)): ?>
<?php $component = $__componentOriginal45125a375f5fa90d7c0a0242067a61c1; ?>
<?php unset($__componentOriginal45125a375f5fa90d7c0a0242067a61c1); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalee304937f81b9102b955efea5fcf24ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee304937f81b9102b955efea5fcf24ec = $attributes; } ?>
<?php $component = App\View\Components\SingleBlogAuthorComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('single-blog-author-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SingleBlogAuthorComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee304937f81b9102b955efea5fcf24ec)): ?>
<?php $attributes = $__attributesOriginalee304937f81b9102b955efea5fcf24ec; ?>
<?php unset($__attributesOriginalee304937f81b9102b955efea5fcf24ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee304937f81b9102b955efea5fcf24ec)): ?>
<?php $component = $__componentOriginalee304937f81b9102b955efea5fcf24ec; ?>
<?php unset($__componentOriginalee304937f81b9102b955efea5fcf24ec); ?>
<?php endif; ?>


            </div>

            <div class="col-lg-4">

                <?php if (isset($component)) { $__componentOriginal11efdc5c2866d688d8afaa18eb7745f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11efdc5c2866d688d8afaa18eb7745f0 = $attributes; } ?>
<?php $component = App\View\Components\SingleBlogSidebarComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('single-blog-sidebar-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SingleBlogSidebarComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11efdc5c2866d688d8afaa18eb7745f0)): ?>
<?php $attributes = $__attributesOriginal11efdc5c2866d688d8afaa18eb7745f0; ?>
<?php unset($__attributesOriginal11efdc5c2866d688d8afaa18eb7745f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11efdc5c2866d688d8afaa18eb7745f0)): ?>
<?php $component = $__componentOriginal11efdc5c2866d688d8afaa18eb7745f0; ?>
<?php unset($__componentOriginal11efdc5c2866d688d8afaa18eb7745f0); ?>
<?php endif; ?>

            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web_roadmap\Diploma\laravel\task_session26\resources\views/single_blog.blade.php ENDPATH**/ ?>