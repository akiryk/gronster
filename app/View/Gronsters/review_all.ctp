<!-- File: /app/View/Gronsters/review_all.ctp -->
<div id="review-all">
    <!-- Here is where we loop through our $posts array, printing out post info -->
<?php foreach ($gronsters as $gronster): ?>
    <div class="review-unit">
        <div class="image">
        <?php
            if ($gronster['Gronster']['drawing_small'] != null){
                $image = '/' . $gronster['Gronster']['drawing_small'];
                echo $this->Html->image($image, array('url' => 'view/' . $gronster['Gronster']['id']));
            } else {
                $message = $gronster['Gronster']['panel_count'] == 1 ? "Draw the middle" : "Draw the bottom";
                echo $this->Html->link($message, array('controller' => 'gronsters', 'action' => 'view', $gronster['Gronster']['id']));
            }
        ?>
        </div>
        <div class="edit-options">
        <?php 
            // use postLink() to post the delete request using javascript
        	echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $gronster['Gronster']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div><!-- #review-all -->
<div id="pagination">
    <?php echo $this->Paginator->numbers(array('first' => 'First page')); ?>
</div>