$(document).ready(function () {
  // display data in table
  displayDataTbl();
  function displayDataTbl() {
    // alert(search);
    $.ajax({
      url: "php/getDataTbl.php",
      type: "POST",
      data: {},
      cache: false,
      dataType: "json",
      BeforeSend: function () {
        //
      },
      success: function (data) {
        // alert("hi");
        var txt = "";
        let countRow = 0;
        for (i in data) {
          countRow++;
          txt += `
                            <tr>
                                <td>${countRow}</td>
                                <td>${data[i]["emp_ID"]}</td>
                                <td>${data[i]["emp_name"]}</td>
                                <td>${data[i]["Country"]}</td>
                                <td>${data[i]["City"]}</td>
                                <td>${data[i]["Department"]}</td>
                                <td>${data[i]["Designation"]}</td>
                                <td><i class="fa-solid fa-pen-nib row-update"></i></td>
                                <td><i class="fa-solid fa-trash row-delete"></i></td>
                            </tr>
                        `;
        }
        // console.log(txt);
        // page_num.text (Math.ceil.data[0].total_record / endPage);
        $(".row-form #tblData tbody").html(txt);
      }
    });
  }
  // cancel btn
  $("#btn-cancel").click(function () {
    var userRespone = confirm("Do you want to cancel?");
    if (userRespone) {
      $("#txt-name").val("");
      $("#txt-country").val("");
      $("#txt-city").val("");
      $("#txt-dept").val("");
      $("#txt-designation").val("");
    } else return;
  });
  // add data to database
  $("#btn-add").click(function () {
    var btnname = $("#btn-add").text();
    var eThis = $(this);
    var frm = eThis.closest("form.formEmp");
    //   console.log(frm)
    var frm_data = new FormData(frm[0]);
    //   alert(btnname);
    if (
      $("#txt-name").val() != "" &&
      $("#txt-dept").val() != "" &&
      $("#txt-country").val() != ""
    ) {
      if (btnname == "Add Employee") {
        var userRespone = confirm("Do you want to add information?");
        if (userRespone) {
          $.ajax({
            url: "php/addData.php",
            type: "POST",
            data: frm_data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            beforeSend: function () {
              //code here
            },
            success: function (data) {
              alert(data);
              displayDataTbl();
            }
          });
          // clear data
          $("#txt-id").val("");
          $("#txt-name").val("");
          $("#txt-country").val("");
          $("#txt-city").val("");
          $("#txt-dept").val("");
          $("#txt-designation").val("");
        } else return;
      } else {
        var userRespone = confirm("Are you sure to update this information?");
        if (userRespone) {
          $.ajax({
            url: "php/updateData.php",
            type: "POST",
            data: frm_data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            beforeSend: function () {
              //code here
            },
            success: function (data) {
              alert(data);
              displayDataTbl();
              $("#btn-add").html("Add Employee");
            }
          });
          $("#txt-id").val("");
          $("#txt-name").val("");
          $("#txt-country").val("");
          $("#txt-city").val("");
          $("#txt-dept").val("");
          $("#txt-designation").val("");
        } else return;
      }
    } else {
      alert("Please field data..!");
    }
  });
  // edit data
  $(document).on("click", "#tblData tr .row-update", function () {
    var userRespone = confirm("Do you want to update this information?");
    if (userRespone) {
      var parent_tr = $(this).parents("tr");
      // alert(postid);
      $("#txt-id").val(parent_tr.find("td:eq(1)").text());
      $("#txt-name").val(parent_tr.find("td:eq(2)").text());
      $("#txt-country").val(parent_tr.find("td:eq(3)").text());
      $("#txt-city").val(parent_tr.find("td:eq(4)").text());
      $("#txt-dept").val(parent_tr.find("td:eq(5)").text());
      $("#txt-designation").val(parent_tr.find("td:eq(6)").text());
      $("#btn-add").html("Save");
    } else return;
  });
  // delete data
  $(document).on("click", "#tblData tr .row-delete", function () {
    var parent_tr = $(this).parents("tr");
    // alert(postid);
    var Id = parent_tr.find("td:eq(1)").text();
    var userRespone = confirm("Do you want to delete this information?");
    if (userRespone) {
      // $("#txt-id").val(parent_tr.find("td:eq(1)").text());
      // alert(Id);
      $.ajax({
        url: "php/DeleteData.php",
        type: "POST",
        data: {
          Id: Id,
        },
        // contentType: false,
        // cache: false,
        // processData: false,
        dataType: "json",
        // beforeSend: function () {
        //   //code here
        // },
        success: function (data) {
          alert(data);
          displayDataTbl();
        }
      });
      $("#txt-id").val("");
    } else return;
  });
});
