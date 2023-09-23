<?php $item_data = json_encode($search_u_result); $data = json_decode($item_data, true); $item = $data[0];  ?>
<form id="item-update">
	<div class="modal-body">
        <label for="updt_book_title">ID</label>
        <input class="form-control" type="TEXT" id="updt_id" name="updt_id" style="pointer-events: none;" value='<?= $item['id'] ?>' required>
        <label for="updt_book_title">BOOK TITLE</label>
        <input class="form-control" type="text" id="updt_book_title" name="updt_book_title" value='<?= $item['book_title'] ?>' required>
        <label for="updt_author">AUTHOR</label>
        <input class="form-control" type="text" id="updt_author" name="updt_author" value='<?= $item['author'] ?>' required>
        <label for="updt_date_published">DATE PUBLISHED</label>
        <input class="form-control" type="DATE" id="updt_date_published" name="updt_date_published" value='<?= $item['date_published'] ?>' required>
        <label for="updt_date_acquired">DATE ACQUIRED</label>
        <input class="form-control" type="DATE" step=any id="updt_date_acquired" name="updt_date_acquired" value='<?= $item['date_acquired'] ?>' required>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-size-h btn-size-w">Update</button>
    </div>
</form>
<script>
$('#item-update').on('submit',function(e){
    event.preventDefault();
        $.ajax({
            url: "home_page/c_update_item_control",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.includes('success')) {
                    search_menu();
                    alert("Item Updated");
                    $("#item-update")[0].reset();
                    $('#update-modal').modal('hide');
                } else {
                    alert(data);
                }
            }
        });
    });
</script>