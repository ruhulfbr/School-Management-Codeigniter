<style type="text/css">
    .album{
        height: 300px;
        width: 200px;
        /*border: 1px solid slateblue;*/
        padding: 2px; 
        margin: 10px 17px;
        border: 2px solid gray;
        float: left;
        box-shadow: 0px 1px 5px gray;
    }
    .images{
        height: 160px;
        /*border-bottom: 1px solid green;*/
    }
    .images img{
        height: 76px;
        width: 96px;
        float: left;
        border: 1px solid gray;
        margin: 1px;
    }
    .album_caption{
        height: 70px;
        overflow: auto;
        border:2px solid #B8E2FB; background-color:#E8F6FF;
        /*margin-top: 5px;*/
        font-size: 12px;
        padding: 3px;
    }
    .album_option{
        border:2px solid #FFAEAE; background-color:#FEEBEB;
        text-align: right;
    }
    .edit_field{
        background: gray;
        position: fixed;
        height: 275px;
        width: 200px;
        float: left;
        opacity: .85;
        display: none;
    }
    .edit_field form{
        opacity: 1;
        color: white;
    }
    .edit_field input{
        color: #303030;
    }

    .edit_field span{
        color: white;
        margin-top: 5px;
    }
    .album_name{
        border:2px solid #B8E2FB;
        background: #E8F6FF url("../design/ico-info.gif") 10px 50% no-repeat;
        text-align: center;
        padding: 5px 0px;
        overflow: hidden;
    }
</style>
<script type="text/javascript">
    function eidtDivView(no) {
        $('#edit_field_' + no).slideToggle('slow');
    }
</script>
<?php
$album_count = 1;
foreach ($album as $album_data) {
    ?>
    <div class="album">
        <div id="edit_field_<?php echo $album_count; ?>" class="edit_field">
            <form action="#" method="post">
                <span> Album Name:</span> 
                <input type="text"  style="width: 198px; height: 30px;" maxlength="30" value="<?php echo $album_data->album_name; ?>">
                <span> Caption: </span>
                <textarea style="height: 100px; width: 198px;"><?php echo $album_data->album_caption; ?></textarea>
                <select class="input-text" style="width: 120px;">
                    <option value="1" <?php $album_data->publish == 1 ? 'selected="selected"' : '' ?>>Publish</option>
                    <option value="2" <?php $album_data->publish == 0 ? 'selected="selected"' : '' ?>>Not Publish</option>
                </select>
                <input type="button" class="input-submit-02" value="Update">
            </form>
        </div>
        <div class="album_name"><?php echo $album_data->album_name; ?></div>
        <div class="images">
            <a href="#" title="Click hare to view this Album">
                <?php
//                if (is_array($album_data->album_id)) {
                if(array_key_exists($album_data->album_id, $photo)){
                    foreach ($photo[$album_data->album_id] as $photo_data) {
                        ?>
                        <img src="<?php echo base_url(). $photo_data->photo_name; ?>" alt="<?php echo $photo_data->photo_id; ?>">
                        <?php
                    }
                }
//                }
                ?>
            </a>
        </div>
        <div class="album_caption">
            <span><?php echo $album_data->album_caption; ?></span>
        </div>
        <div class="album_option">
            <?php
            echo $album_data->created_date;

            if ($album_data->publish == 1) {
                ?>
                <img src="<?php echo base_url(); ?>design/ico-done.gif" alt="Publish" title="Published">
                <?php
            } else {
                ?>
                <img src="<?php echo base_url(); ?>design/ico-delete.gif" alt="not Publish" title="Not Published">
                <?php
            }
            ?>
            <a href="#" onclick="eidtDivView(<?php echo $album_count; ?>);" title="Edit this Album">Edit</a>
            <a href="<?php echo base_url(); ?>photos/edit_photo/<?php echo $album_data->album_id; ?>"  title="Edit this Album">Edit</a>
        </div>
    </div> 
    <?php
    $album_count++;
}
?>
