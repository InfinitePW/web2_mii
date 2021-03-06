
<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add Footer Posts</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Date</th>
            <th>Option</th>
        </tr>
   
        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_footer_posts', 'files' => 'true']) }}
                <td>{{ Form::file('footer_post_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('footer_post_title', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::text('footer_post_date', null, array('class' => 'width_box')) }}</td>              
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./footer_posts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>
