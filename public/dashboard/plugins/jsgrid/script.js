// Add row
var row = 1;
$(document).on("click", "#add-row", function() {
    var new_row = '<tr id="row' + row + '"><td><input type="text" name="product_name' + row + '" placeholder="Product Name" class="form-control product_name productSelection"></td><td><input type="text" name="desc[]" id="available_quantity_1" name="available_quantity_1' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><div class="col-sm-12"> <select name="serial_no' + row + '" class="select2 form-control mb-3 custom-select float-right" ><option>Select Option</option><optgroup><option>Select Option</option><option value="1">Data</option><option value="2">new Data</option></optgroup></select></div> </td><td><input type="text"  id="available_quantity_1" name="desc' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="serial_no' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_2" name="available_quantity' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00"></td><td><input type="text" id="available_quantity_3" name="available_quantity_5' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" ></td><td><input type="text" id="available_quantity_4" name="product_quantity' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" ></td><td><input type="text" id="available_quantity_5" name="product_rate' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><button type="button" class="delete-row btn btn btn-danger text-right red valid" value="Delete" aria-invalid="false" tabindex="8"><i class="fas fa-times"></i></button></td></tr>';
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