// Add row
var row = 1;
$(document).on("click", "#add-row", function() {
    var new_row = '<tr id="row' + row + '"><td><div class="col-sm-10"><select name="account_name' + row + '" class="select2 form-control mb-3 custom-select float-right" ><option><span class="select2-selection__placeholder">Select option</span> </option><optgroup label="Alaskan/Hawaiian Time Zone"><option value="AK">Projects</option><option value="HI">Hawaii</option> </optgroup> </select></div></td><td><input type="text" name="code' + row + '" class="form-control" id="horizontalInput2" readonly ></td><td> <input type="number" name="debit' + row + '" value="0" class="form-control total_price text-right valid" id="horizontalInput2" placeholder="0" ></td><td><input type="number" name="amount' + row + '" value="0" class="form-control total_price text-right valid" id="horizontalInput2" ></td><td><button type="button" class="delete-row btn btn btn-danger text-right red valid" value="Delete" aria-invalid="false" tabindex="8"><i class="fa fa-trash"></i></button></td></tr>';
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