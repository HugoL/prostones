<div class="<?php echo $class ?>">
<?php
foreach($images as $image) {
    echo CHtml::image($image[0], $image['alt'], $image['htmlOptions']);
}
?>
</div>
