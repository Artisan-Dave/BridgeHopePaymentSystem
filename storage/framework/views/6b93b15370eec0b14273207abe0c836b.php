<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Payments')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <?php if(session()->has('success')): ?>
                    <div class="font-medium text-sm text-green-600 p-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="p-5 text-gray-900">
                    <div class="flex justify-end my-2">
                        <form method="GET" action="<?php echo e(route('payment.search')); ?>" class="input-group">
                            <input type="text" name="search" placeholder="Search..."
                                value="<?php echo e(request()->query('search')); ?>" class="form-control rounded-md shadow-sm">
                            <button type="submit"
                                class="px-2 py-2 bg-blue-500 rounded-md text-white text-sm shadow-md">Search</button>
                        </form>
                        <?php if(isset($message)): ?>
                            <div style="font-medium text-sm text-red-600">
                                <?php echo e($message); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex justify-between bg-gray-200 p-5 rounded-md">
                        <div>
                            <h1 class="text-xl text-semibold">Total of Transactions (<?php echo e($total); ?>)</h1>
                        </div>
                    </div>

                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 table-auto dark:divide-gray-700">
                                    <thead class="bg-gray-100 dark:bg-gray-500">
                                        <tr>
                                            
                                            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">FULL
                                                NAME</th>
                                            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">AMOUNT

                                            </th>
                                            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">TOTAL BALANCE

                                            </th>
                                            
                                            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">DATE

                                            </th>
                                            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-300 dark:divide-gray-700">
                                        <?php $__empty_1 = true; $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-100">
                                                
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <?php echo e($payment->full_name); ?>

                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <?php echo e(number_format($payment->amount)); ?>

                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <?php echo e(number_format($payment->total_balance)); ?>

                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <?php echo e($payment->created_at); ?>

                                                </td>
                                                <td>
                                                    
                                                    <a href="<?php echo e(route('invoice.view' ,['payment_id' => $payment->payment_id])); ?>"
                                                        class="px-2 py-2 bg-blue-500 rounded-md text-white text-sm shadow-md"
                                                        target="_blank" rel="noopener noreferrer">View</a>

                                                    
                                                    <a href="<?php echo e(route('invoice.download',['payment_id' => $payment->payment_id])); ?>"
                                                        class="px-2 py-2 bg-green-500 rounded-md text-white text-sm shadow-md">Download</a>

                            </div> <!-- x-data -->
                            </td>
                            </tr> <!-- Header -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div>
                                <h2 class="flex justify-center bg-gray-200">No record found</h2>
                            </div>
                            <?php endif; ?> <!-- For Else -->
                            <?php echo e($payments->appends(['search' => request()->search])->links()); ?>

                            </tbody> <!--Table Class -->
                        </div> <!-- Overflow Hidden -->
                    </div> <!-- py-12 -->
                </div> <!-- Overflow-x -->
            </div> <!-- p5 -->
        </div> <!-- bg-white bg-hidden -->
    </div> <!--max-w7-xl -->
    </div> <!-- py-12 -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\dashboard\payment-system\resources\views/payments/main.blade.php ENDPATH**/ ?>