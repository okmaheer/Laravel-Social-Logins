// Add row
var row = 1;
$(document).on("click", "#add-row", function() {
    var new_row = '<tr id="row' + row + '"><td><input type="text" name="product_name' + row + '" placeholder="Product Name" class="form-control product_name productSelection"></td><td><input type="text" id="available_quantity_1" name="available_quantity_4' + row + '" class="form-control text-right stock_ctn_1" placeholder=""></td><td><button type="button" class="delete-row btn btn btn-danger text-right float-right red valid" value="Delete" aria-invalid="false" tabindex="8"><i class="fas fa-times"></i></button></td></tr>';
    // alert(new_row);
    $('#test-body').append(new_row);
    row++;
    return false;
});

// Remove criterion
$(document).on("click", ".delete-row", function() {
    //  alert("deleting row#"+row);
    if (row > 1) {
        $(this).closest('tr').remove();
        row--;
    }
    return false;
});