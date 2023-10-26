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
            <form enctype='multipart/form-data' action="<?php echo e((isset($package))?route('package.update',$package->package_id):route('package.store')); ?>" method="POST">
            <!-- Generate CSRF token -->
            <?php echo csrf_field(); ?>
            <?php if(isset($package)): ?><?php echo method_field('PUT'); ?><?php endif; ?>
            <div class="grid overflow-hidden grid-cols-2 grid-rows-none gap2">
                <div class="box">
                <div class="">
                        <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
                        <input type="text" id="code" name="package_code" value="<?php echo e((isset($package))?$package->package_code:old('package_code')); ?>" placeholder="Code" required
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <?php $__errorArgs = ['package_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 text-xs italic"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_name">Package Name</label>
                        <input type="text" id="package_name" name="package_name" value="<?php echo e((isset($package))?$package->package_name:old('package_name')); ?>" placeholder="Package Name" required
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <?php $__errorArgs = ['package_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-red-500 text-xs italic"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="communities">Community</label>
                            <select id="communities" name="community_id" 
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Choose Communities</option>
                                <?php $__currentLoopData = $communities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                        <?php echo e((isset($package)&&$package->community_id==$item->community_id || old('community_id')==$item->community_id)?'selected':''); ?>

                                        value="<?php echo e($item->community_id); ?>"> <?php echo e($item->community_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['community_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="package_desc">Package Description</label>
                        <textarea name="package_desc" id="alamat" cols="30" rows="2"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <?php echo e((isset($package))?$package->package_desc:old('package_desc')); ?>

                        </textarea>
                            <?php $__errorArgs = ['package_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-red-500 text-xs italic"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="foto">Photo</label>
                        <input type="file" name="feature_img" id="foto"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <?php $__errorArgs = ['feature_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-red-500 text-xs italic"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <hr>
                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparant shadow-sm text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        Save
                    </button>
                    </div>
                </div>
            </div>
                <!-- <div class="px-2 py-8 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    
                </div>
                <hr>
                <div class="px-4 py-3 bg-white text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparant shadow-sm text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    Save
                </button>
                </div> -->
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>

<?php /**PATH D:\INFORMATIKA ITS\SEM 5\PWEB\ETS\EF234301_WEBPRO-E-_MID_5025211023_Wan-Sabrina-Mayzura_5025211036_Mashita-Dewi-main\resources\views/backpage/inputpackage.blade.php ENDPATH**/ ?>