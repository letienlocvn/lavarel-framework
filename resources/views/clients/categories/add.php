<h1>Add new category</h1>
<form method="POST" action="<?php echo route('categories.add'); ?>">
    <div>
        <input type="text" name="category_name" placeholder="Name category" id="">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <input type="submit" value="Add new category">
</form>