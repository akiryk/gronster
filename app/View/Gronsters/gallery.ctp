<!-- File: /app/View/Gronsters/gallery.ctp -->

    <!-- Here is where we loop through our $posts array, printing out post info -->
<div id="gallery" class="image-display-medium">
    <?php foreach ($gronsters as $gronster): ?>
        <?php 
            if ($gronster['Gronster']['drawing_large'] != null){
                $image = '/' . $gronster['Gronster']['drawing_large'];
                echo $this->Html->image($image);
                // echo $this->Html->image($image, array('url' => 'view/' . $gronster['Gronster']['id']));
            }
            // } else {
            //     $message = $gronster['Gronster']['panel_count'] == 1 ? "Draw the middle" : "Draw the bottom";
            //     echo $this->Html->link($message, array('controller' => 'gronsters', 'action' => 'view', $gronster['Gronster']['id']));
            // }
        ?>
        <?php 
            // use postLink() to post the delete request using javascript
        	// echo $this->Form->postLink(
         //        'Delete',
         //        array('action' => 'delete', $gronster['Gronster']['id']),
         //        array('confirm' => 'Are you sure?'));
            ?>
    <?php endforeach; ?>
</div> <!-- #gallery -->
<div id="pagination">
    <?php echo $this->Paginator->numbers(array('first' => 'First page')); ?>
</div>
