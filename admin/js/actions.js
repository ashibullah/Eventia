$(".delete_user_btn").click(function() {
  var user_id_v = $(this).data("user-id");
  var button = this;

  let y = "Yes";
  let n = "No";
  
  // input y / n 
  let r = confirm("Are you sure you want to delete this user?");
  if (r == true) {
    // alert("You pressed OK!");  
    window.location.href = "php/admin_ajax.php?delete_user&user_id=" + user_id_v;
  } else {  
    // alert("You pressed Cancel!");  
    return false; 
  }





  
});

$(".delete_page_btn").click(function() {
  var user_id_v = $(this).data("user-id");
  var button = this;

  let y = "Yes";
  let n = "No";
  
  // input y / n 
  let r = confirm("Are you sure you want to delete this user?");
  if (r == true) {
    // alert("You pressed OK!");  
    window.location.href = "php/admin_ajax.php?delete_page&user_id=" + user_id_v;
  } else {  
    // alert("You pressed Cancel!");  
    return false; 
  }





  
});
