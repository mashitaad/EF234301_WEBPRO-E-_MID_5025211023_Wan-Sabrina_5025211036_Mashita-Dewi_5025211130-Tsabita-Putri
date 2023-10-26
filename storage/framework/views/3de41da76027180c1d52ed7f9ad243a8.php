<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6><?php echo e($title); ?></h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="flex justify-between items-center p-4"> 
                <div>
                    <a href="<?php echo e(route('package.create')); ?>">
                        <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Add</button>
                    </a>
                    <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Publish</button>
                    <button style="color: red;" class="bg-white mr-2 hover:bg-gray-100 text-sm text-red-900 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Delete</button>
                </div>
                    <form action="<?php echo e(route('package.index')); ?>" method="GET" class="flex items-center space-x-4">
                        <select id="community_id" name="community_id" class="block w-full py-2 px-4 border border-gray-300 bg-white rounded-1-2x1 shadow-sm focus:outline-none focus:ring-indigo-500">
                            <option value="">Choose Community</option>
                            <?php $__currentLoopData = $communities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->community_id); ?>" 
                                    <?php echo e((isset($_GET['community_id']) && $_GET['community_id'] == $item->community_id) ? 'selected' : ''); ?>>
                                    <?php echo e($item->community_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <input type="text" name="s" value="<?php echo e((isset($_GET['s']))?$_GET['s']:''); ?>" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search...">

                        <button type="submit" class="ml-4 bg-white hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Search</button>
                    </form>
            </div>
        </div>
        <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Packages</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Code</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <div class="flex px-2 py-1">
                                <div>
                                    <img src="<?php echo e(asset($item->feature_img)); ?>" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal"><?php echo e($item->package_name); ?></h6>
                                    <p class="mb-0 text-xs leading-tight text-slate-400"><?php echo e($item->community->community_name); ?></p>
                                </div>
                            </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <?php echo e($item->package_code); ?>

                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <a href="<?php echo e(route('package.edit',$item->package_id)); ?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="<?php echo e(route('package.destroy',$item->package_id)); ?>" method="POST">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
            <?php if (Request::path()=='package') {?>
                <div class="m-4">
                    Showing <?php echo e($packages->firstItem()); ?> to <?php echo e($packages->lastItem()); ?> of <?php echo e($packages->total()); ?> results
                </div>
                <div class="m-4"> 
                    <?php echo e($packages->appends(request()->query())->links()); ?>

                </div>
            <?php } ?>
    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH D:\INFORMATIKA ITS\SEM 5\PWEB\ETS\EF234301_WEBPRO-E-_MID_5025211023_Wan-Sabrina-Mayzura_5025211036_Mashita-Dewi-main\resources\views/backpage/daftarpackage.blade.php ENDPATH**/ ?>