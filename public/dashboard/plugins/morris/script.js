// Add row
var row = 2;
$(document).on("click", "#add-row", function() {
    var new_row = '<tr id="row' + row + '"><td>' + row + '</td><td><input type="text" name="start_amount' + row + '" id="start_amount" class="form-control"></td><td><input type="text" name="end_amount' + row + '"  id="end_amount" class="form-control"> </td><td><input type="text" name="rate' + row + '" id="rate" class="form-control"></td><td><button class="delete-row btn  btn-danger" type="button" id="delPOIbutton" value="Delete"><i class="fa fa-trash"></i></button></td><td><button id="add-row" class="btn btn-success ml-3" type="button" id="addmorePOIbutton" value="Add More POIs"> <i class="fa fa-plus-circle"></i></button></td> </tr>';
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