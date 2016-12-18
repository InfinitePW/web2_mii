<div class="main">
    <div class="title">
        <img src="images/035-Clefairy-icon.png" alt=""/>
        <label>Search</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        
        <?php if(isset($resultSearchs)): ?>
            <?php if(is_string($resultSearchs)):?>
                <label><font color="red" style="font-size: 20px;"><?php echo $resultSearchs; ?></font></label>
            <?php else: ?>
                <?php foreach ($resultSearchs as $resultSearch): ?>
                <tr>
                    <td> <?php echo $resultSearch->news_id ?></td>
                    <td> <?php echo $resultSearch->news_title ?></td>
                    <td> <img src="<?php echo $resultSearch->news_img ?>"</td>
                    <td> <?php echo $resultSearch->news_decription ?></td>
                    <td>
                        <a href="edit_content_news?news_id=<?php echo $resultSearch->news_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                        <a href="delete_content_news?news_id=<?php echo $resultSearch->news_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                    </td>
                </tr>
                <?php endforeach ?>
            <?php endif ?>
        <?php endif ?>
        
        

    </table>
</div>