// Add row
var row = 1;
$(document).on("click", "#add-row", function() {

    var new_row = '<tr id="row' + row + '"><td><div name="from_value' + row + '" class="col-sm-12"> <select class="select2 form-control mb-3 custom-select float-right" > <option>Select option</option> <optgroup><option value="{{$supplier_val->supplier_name}}">{{$supplier_val->supplier_name}}</option></optgroup>`</div></td><td><input name="to_value' + row + '" type="text" class="form-control text-right"  placeholder="0.00"/></td><td><button type="button"  class="btn btn-sm btn-success" id="add-row"><i class="fa fa-plus-square"></i></button>&nbsp;<button type="button" class=" delete-row btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></td></tr>';
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