<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Footer Posts</label>
    </div>
    
    <div class="add"> 
        <a href="./add_footer_posts" class="similar"> Add + </a>
        <a href="exportFooter_posts" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Date</th>
            <th>Option</th>
        </tr>
        <?php foreach ($footer_posts as $footer): ?>
        <tr>
            <td> <?php echo $footer->footer_post_id ?></td>
            <td><img class="img_zoom" src="<?php echo $footer->footer_post_img ?>"></td>
            <td> <?php echo $footer->footer_post_title ?></td>
            <td> <?php echo $footer->footer_post_date ?></td>
            <td>
                <a href="edit_footer_posts?footer_post_id=<?php echo $footer->footer_post_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_footer_posts?footer_post_id=<?php echo $footer->footer_post_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($footer_posts->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $footer_posts->currentPage(); $index--; ?>
            <li><a href="footer_posts?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $footer_posts->lastPage())
            <?php  ?>
                @if($footer_posts->currentPage() == $i)
                    <li class="disabled"><a href="footer_posts?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="footer_posts?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($footer_posts->currentPage() == $footer_posts->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $footer_posts->currentPage(); $index++; ?>
            <li><a href="footer_posts?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>
