<?php $index = 1; foreach($search_result as $search_results) { ?>
    <tr>
        
        <td class="align-middle"><?=  $search_results['book_title'] ?></td>
        <td class="align-middle"><?=  $search_results['author'] ?></td>
        <td class="text-center align-middle"><?=  $search_results['date_published'] ?></td>
        <td class="text-end align-middle"><?=  $search_results['date_acquired'] ?></td>
        <td class="text-center align-middle">
             <button onclick="update_item('<?= $search_results['id'] ?>')" class="btn btn-primary btn-size-sm btn-size-h align-middle"><i class="fas fa-edit"></i></button>
            <button onclick="delete_item('<?= $search_results['id'] ?>')" class="btn btn-danger btn-size-sm btn-size-h align-middle"><i class="fas fa-trash-alt"></i></button>



          </td>
    </tr>
<?php $index++; } ?>