<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content News</label>
    </div>
    <div class="add"> 
        <a href="./add_content_news" class="similar"> Add + </a>
        <a href="exportContent_news" class="similar">Export to Excel</a>
    </div>
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents_new as $content_new): ?>
        <tr>
            <td> <?php echo $content_new->news_id ?></td>
            <td> <?php echo $content_new->news_title ?></td>
            <td> <img class="img_zoom" src="<?php echo $content_new->news_img ?>"></td>
            <td> <?php echo $content_new->news_decription ?></td>
            <td>
                <a href="edit_content_news?news_id=<?php echo $content_new->news_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_content_news?news_id=<?php echo $content_new->news_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($contents_new->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $contents_new->currentPage(); $index--; ?>
            <li><a href="list_content_news?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $contents_new->lastPage())
            <?php  ?>
                @if($contents_new->currentPage() == $i)
                    <li class="disabled"><a href="list_content_news?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_content_news?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($contents_new->currentPage() == $contents_new->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $contents_new->currentPage(); $index++; ?>
            <li><a href="list_content_news?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>