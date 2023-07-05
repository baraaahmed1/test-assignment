$(document).ready(() => {
    const optionsFunctions = {
        "dvd": function() {$("#size-container").addClass("show"),$("#weight-container").removeClass("show"),$("#dimensions-container").removeClass("show")},
        "book": function() {$("#size-container").removeClass("show"),$("#weight-container").addClass("show"),$("#dimensions-container").removeClass("show")},
    "furniture": function() {$("#size-container").removeClass("show"),$("#weight-container").removeClass("show"),$("#dimensions-container").addClass("show")}
    };
    $("select").change(function () {
    const selectedOption = $(this).val();
    const selectedFunction = optionsFunctions[selectedOption];
    selectedFunction();
    });



let ids = [];

$(".delete-checkbox").click(function () {
  if($(this).prop('checked')){
    id = $(this).closest(".cardbody").find(".pro").val();
    ids.push(id);
    //  $(this).addClass("checkbox").removeClass("delete-checkbox");
  } else{
    index = ids.indexOf($(this).closest(".cardbody").find(".pro").val());
    if (index > -1) {
      ids.splice(index, 1);
    }
  }
});

$(".del").click(function () {
  if (ids.length > 0) { // check if any items are selected
    $.each(ids, function (index, id) {
      $.post("function/delete.php", { id: id }, function (data) {
        $(".prod"+id).css({display:"none"})
      });
    });
  }
});

$(".sub").click(function () {
  $("#product_form").submit();
  ids = [];
});
});








// let ids = [];
//   $(".delete-checkbox").click(function () {
//     id = $(this).closest(".cardbody").find(".pro").val();
//     ids.push(id);
//     console.log(ids);
//   });

//   $(".del").click(function () {
//     $.each(ids, function (index, id) {
//       $.post("function/delete.php", { id: id }, function (data) {
//         $(".prod"+id).css({display:"none"})
//       });
//     });
//   });

//   $(".sub").click(function () {
//     $("#product_form").submit();
//     ids = [];
//   });
  
// });






