<div class="breadCrumbContainer">
<div class="breadCrumb">
<a href="/">Home</a> 
    <span>/</span>

    <?php if(isset($categoryTitle) && isset($categoryUrl)): ?>
    <span><a href="<?php echo $categoryUrl; ?>"><?php echo $categoryTitle; ?></a></span>
    <span>/</span>
    <?php endif; ?>
    <?php if(isset($subCategory) && isset($subCategoryUrl)): ?>
    <span><a href="<?php echo $subCategoryUrl; ?>"><?php echo $subCategory; ?></a></span>
    <span>/</span>
    <?php endif; ?>

    <span><?php echo $pageTitle; ?></span>
</div>
<div class="breadCrumbTitle">
    <h1><?php echo $pageTitle; ?></h1>
</div>
</div>