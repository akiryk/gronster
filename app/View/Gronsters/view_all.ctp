<!-- File: /app/View/Gronsters/view_all.ctp -->
<div id="review-all">
    <!-- Here is where we loop through our $posts array, printing out post info -->
<?php foreach ($gronsters as $gronster): ?>
    <div class="review-unit">
        <div class="image">
        <?php
            if ($gronster['Gronster']['drawing_small'] != null){
                $image = '/' . $gronster['Gronster']['drawing_small'];
                echo $this->Html->image($image, array('url' => 'view/' . $gronster['Gronster']['id']));
            } 
        ?>
        </div>
    </div>
<?php endforeach; ?>
</div><!-- #review-all -->
