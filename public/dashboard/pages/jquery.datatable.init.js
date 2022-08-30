/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Datatables Js
 */

$(document).ready(function() {
    $('#datatable').DataTable();

    $(document).ready(function() {
        $('#datatable2').DataTable();
    });

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});

function employechange_emp_sal(id) {
    var base_url = $("#base_url").val();
    var csrf_test_name = $('[name="csrf_test_name"]').val();
    var date_month = $('input[name$="myDate"]').val();

    //   console.log(date_month + " ajax");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "select_employ",
        method: 'post',
        dataType: 'json',
        data: {
            'employee_id': id,
            'date_month': date_month,
            csrf_test_name: csrf_test_name,
        },
        success: function(data) {

            console.log(data);
            document.getElementById('basic').value = data[0].hrate;

            document.getElementById('org_sal').value = data[0].hrate;
        },

    });
}

function calc_sal_advc() {
    var advance = $('#advance').val();
    var basic = $('#basic').val();
    var org_sal = $('#org_sal').val();
    var attendance = $('#attendance').val();
    var present = $('#present').val();
    var deduction = $('#deduction').val();

    // var sal = org_sal - deduction;
    var sal = 0,
        att = 0,
        temp_sal = 0;
    var rate = org_sal / 30;
    // alert(rate);
    temp_sal = org_sal - advance;

    temp_sal = (deduction > 0) ? (temp_sal - deduction) : temp_sal;
    // // console.log(rate);
    if ($("#deduct_select").is(':checked') && attendance > 0 && present > 0) {
        att = attendance - present;
        // att = att * rate;
        sal = temp_sal - (att * rate);
        // console.log("remaining: " + sal + " att " + att + " rate: " + rate + " temp_sal: " + temp_sal + " basic: " + basic);
    } else {

        sal = temp_sal;
    }
    $('#basic').val(sal);
    $('#total_salary').val(sal);
}

let i = 1;

function add_row(elem) {
    i++;
    let row = `
    <tr>
        <td class="product_field">
            <input type="text" name="product_name" onkeypress="invoice_productList(` + i + `);" class="form-control productSelection" placeholder="Product Name" id="product_name_1" tabindex="5">

            <input type="hidden" class="autocomplete_hidden_value product_id_` + i + `" name="product_id[]" id="SchoolHiddenId">

            <input type="hidden" class="baseUrl" value="http://localhost/codignator/food_retail/">
        </td>
            <td>
            <input type="text" name="desc[]" class="form-control text-right " tabindex="6">
        </td>
        <td class="invoice_fields">
                <select class="form-control select2-hidden-accessible" id="serial_no_` + i + `" name="serial_no[]" tabindex="-1" aria-hidden="true">
                <option></option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 83px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="7" aria-labelledby="select2-serial_no_` + i + `-container"><span class="select2-selection__rendered" id="select2-serial_no_` + i + `-container"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </td>
        <td>
            <input type="text" name="available_quantity[]" class="form-control text-right available_quantity_` + i + `" value="100" readonly="">
        </td>
        <td>
            <input name="" id="" class="form-control text-right unit_` + i + ` valid" value="None" readonly="" aria-invalid="false" type="text">
        </td>
        <td>
            <input type="text" name="product_quantity[]" onkeyup="quantity_calculate(` + i + `);" onchange="quantity_calculate(` + i + `);" class="total_qntt_` + i + ` form-control text-right" id="total_qntt_` + i + `" placeholder="0.00" min="0" tabindex="8" value="1">
        </td>
        <td>
            <input type="text" name="product_rate[]" id="price_item_` + i + `" class="price_item1 price_item form-control text-right" tabindex="9" onkeyup="quantity_calculate(` + i + `);" onchange="quantity_calculate(` + i + `);" placeholder="0.00" min="0">
                <input type="hidden" name="supplier_price[]" id="supplier_price_` + i + `">
        </td>
        <!-- Discount -->
        <td>
            <input type="text" name="discount[]" onkeyup="quantity_calculate(` + i + `);" onchange="quantity_calculate(` + i + `);" id="discount_` + i + `" class="form-control text-right" min="0" tabindex="10" placeholder="0.00">
            <input type="hidden" value="1" name="discount_type" id="discount_type_` + i + `">

        </td>


        <td>
            <input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_` + i + `" value="0.00" readonly="readonly">
        </td>

        <td>
            <button tabindex="17" id="deleteRow_` + i + `" style="text-align: right;" class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button>
            <!-- Tax calculate start-->
                                                        <!-- Tax calculate end-->

            <!-- Discount calculate start-->
            <input type="hidden" id="total_discount_` + i + `" class="">
            <input type="hidden" id="all_discount_` + i + `" class="total_discount dppr" name="discount_amount[]">
            <!-- Discount calculate end -->


        </td>
    </tr>
    `;

    $("#table-body").append(row);
}

function deleteRow(elem) {
    $("#" + elem.id).parent().parent().remove();
    // alert(elem.id);
}


function quantity_calculate(item) {
    var quantity = $("#total_qntt_" + item).val();
    var available_quantity = $(".available_quantity_" + item).val();
    var price_item = $("#price_item_" + item).val();
    var invoice_discount = $("#invoice_discount").val();
    var discount = $("#discount_" + item).val();
    var total_tax = $("#total_tax_" + item).val();
    var total_discount = $("#total_discount_" + item).val();
    var taxnumber = $("#txfieldnum").val();
    // var dis_type = $("#discount_type").val();
    var dis_type = 1;

    if (quantity > 0 || discount > 0) {
        if (dis_type == 1) {
            var price = quantity * price_item;
            var dis = +(price * discount / 100);


            $("#all_discount_" + item).val(dis);

            //Total price calculate per product
            var temp = price - dis;
            var ttletax = 0;
            $("#total_price_" + item).val(temp);
            for (var i = 0; i < taxnumber; i++) {
                var tax = (temp - ttletax) * $("#total_tax" + i + "_" + item).val();
                ttletax += Number(tax);
                $("#all_tax" + i + "_" + item).val(tax);
            }


        } else if (dis_type == 2) {
            var price = quantity * price_item;

            // Discount cal per product
            var dis = (discount * quantity);

            $("#all_discount_" + item).val(dis);

            //Total price calculate per product
            var temp = price - dis;
            $("#total_price_" + item).val(temp);

            var ttletax = 0;
            for (var i = 0; i < taxnumber; i++) {
                var tax = (temp - ttletax) * $("#total_tax" + i + "_" + item).val();
                ttletax += Number(tax);
                $("#all_tax" + i + "_" + item).val(tax);
            }
        } else if (dis_type == 3) {
            var total_price = quantity * price_item;
            var dis = discount;
            // Discount cal per product
            $("#all_discount_" + item).val(dis);
            //Total price calculate per product
            var price = total_price - dis;
            $("#total_price_" + item).val(total_price);

            var ttletax = 0;
            for (var i = 0; i < taxnumber; i++) {
                var tax = (price - ttletax) * $("#total_tax" + i + "_" + item).val();
                ttletax += Number(tax);
                $("#all_tax" + i + "_" + item).val(tax);
            }
        }
    } else {
        var n = quantity * price_item;
        var c = quantity * price_item * total_tax;
        $("#total_price_" + item).val(n),
            $("#all_tax_" + item).val(c)
    }
    calculateSum();
}

function calculateSum() {
    var taxnumber = $("#txfieldnum").val();
    var t = 0,
        a = 0,
        e = 0,
        o = 0,
        p = 0,
        f = 0,
        tx = 0,
        ds = 0,
        ad = 0;

    //Total Tax
    for (var i = 0; i < taxnumber; i++) {

        var j = 0;
        $(".total_tax" + i).each(function() {
            isNaN(this.value) || 0 == this.value.length || (j += parseFloat(this.value))
        });
        $("#total_tax_ammount" + i).val(j.toFixed(2, 2));

    }
    //Total Discount
    $(".total_discount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (p += parseFloat(this.value))
        }),
        $("#total_discount_ammount").val(p.toFixed(2, 2)),

        $(".totalTax").each(function() {
            isNaN(this.value) || 0 == this.value.length || (f += parseFloat(this.value))
        }),
        $("#total_tax_amount").val(f.toFixed(2, 2)),

        //Total Price
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
        }),

        $(".dppr").each(function() {
            isNaN(this.value) || 0 == this.value.length || (ad += parseFloat(this.value))
        }),

        o = a.toFixed(2, 2),
        e = t.toFixed(2, 2),
        tx = f.toFixed(2, 2),
        ds = p.toFixed(2, 2);

    var test = +tx + +e + -ds + +ad;
    $("#grandTotal").val(test.toFixed(2, 2));


    var gt = $("#grandTotal").val();
    var invdis = $("#invoice_discount").val();
    var total_discount_ammount = $("#total_discount_ammount").val();
    var ttl_discount = +total_discount_ammount;
    $("#total_discount_ammount").val(ttl_discount.toFixed(2, 2));
    var grnt_totals = gt;
    $("#grandTotal").val(grnt_totals);


}
