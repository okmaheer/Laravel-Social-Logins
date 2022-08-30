// Add row
var row = 1;
$(document).on("click", "#add-row", function() {
    var new_row = '<tr id="row' + row + '"><td><input type="text" name="product_name' + row + '" placeholder="Product Name" class="form-control product_name productSelection"></td><td><input type="text" id="available_quantity_1" name="available_quantity_1' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><div class="col-sm-12"> <select name="cash_payment' + row + '" class="select2 form-control mb-3 custom-select float-right" ><option>Cash Payment</option><optgroup label="Alaskan/Hawaiian Time Zone"><option value="AK">Cash Payment</option></optgroup></select></div> </td><td><input type="text" id="available_quantity_1" name="available_quantity_2' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="available_quantity_3' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="available_quantity_4' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="available_quantity_5' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="available_quantity_6' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><input type="text" id="available_quantity_1" name="available_quantity_7' + row + '" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly></td><td><button type="button" class="delete-row btn btn btn-danger text-right red valid" value="Delete" aria-invalid="false" tabindex="8"><i class="fas fa-times"></i></button></td></tr>';
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