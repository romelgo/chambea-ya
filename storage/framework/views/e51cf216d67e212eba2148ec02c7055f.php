<?php $__env->startSection('content'); ?>
    <!--  Header BreadCrumb -->
    <div class="content-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">View post : <?php echo e($post->title); ?> </li>
            </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/posts" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to posts</a>
            
            
        </div>
    </div>
    <!--  Header BreadCrumb --> 

<div class="card bg-white">
    <div class="card-body mt-5 mb-5">

  

            <div class="form-group row">
                <div class="col-md-2">Title</div>
                <div class="col-md-4">
                    <input id="name" readonly type="text" value="<?php echo e($post->title); ?>" class="form-control"   autofocus="">
      
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="category">Category:</label>
                </div>
                <div class="col-md-4">
                    <select readonly id="category_id" class="form-control">
                        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id==$post->category_id ? 'selected':''); ?>><?php echo e($cat->name); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">

                    <textarea name="description" readonly id="editor"><?php echo e($post->description); ?></textarea>
                 
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="file-input-logo">Upload post Thumbnail:</label>
                </div>
                <div class="col-md-4">
                    <div class="set_thumb">

                        <div id='settings-logo'>
                          <img id="preview-thumb" align='middle'src="<?php echo e(url('storage/'.$post->post_thumbnail)); ?>" alt="your image" title=''/>
                          
                        </div>
                          
                    </div>
                  
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="status">Status:</label>
                </div>
                <div class="col-md-4">
                    <select name="status" readonly id="status" class="form-control">
                        <option value="1"<?php echo e($post->status=='1' ? 'selected':''); ?>>Live</option>
                        <option value="0"<?php echo e($post->status=='0' ? 'selected':''); ?>>Draft</option>
                    </select>
       
                

                 </div>
            </div>




            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <a href="/dashboard/posts" class="theme-primary-btn btn btn-success">Back to posts</a>
                   
                 </div>
            </div>


  
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despligue\portal-v1\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>