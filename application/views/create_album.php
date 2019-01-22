<script>
    function createOrRepAlbum(album_type) {
        if (album_type == "create") {
            $('#create_album').slideDown('first', function() {
                $('#old_album').slideUp('first');
            });
        } else {
            $('#old_album').slideDown('first', function() {
                $('#create_album').slideUp('first');
            });
        }
    }
</script>
<h3 class="tit">Upload Photo for web Gallery</h3>
<form action="<?php echo base_url(); ?>photos/uploadAllPhoto" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Add New Photo</legend>
        <?php
        if ($this->session->userdata('msg')) {
            echo $this->session->userdata('msg');
            $this->session->unset_userdata('msg');
        }
        ?>
        <table class="nostyle" >
            
            
            
            
            
            
            
            
            <tr>
                <td>Album Name:</td>
                <td>
                    <span id='old_album'>
                        <select name="album_id" class="input-text" >
                            <option value="">Select An Album</option>
                            <?php
                            foreach ($album as $album_data) {
                                ?>
                                <option value="<?php echo $album_data->album_id ?>"><?php echo $album_data->album_name ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        &nbsp; or <a href="#" onclick="createOrRepAlbum('create');">Create New</a>
                    </span>
                    <span id="create_album" style="display: none;">
                        <input type="text" size="40" name="album_name" class="input-text" />
                        <br>
                        Caption
                        <br><textarea class="textarea" name="album_caption" cols="37"></textarea>
                        &nbsp; or <a href="#" onclick="createOrRepAlbum('replace');">Replace Album</a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Add New Photo</td>
                <td>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo '<br><span style="text-align:right;width:30px;float:left">' . $i . '. </span>';
                        $photo='photo'.$i;
                        ?>
                    <?php echo $i;?>
                    <input type="file" name="<?php echo $photo; ?>">
                        <?php
                    }
                    ?>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Submit" style="float: left;"/></td>
            </tr>
        </table>
    </fieldset>
</form>