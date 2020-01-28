// $(document).ready(function(){
//  $(document).on('change', '#photo', function(){
//   var name = document.getElementById("photo").files[0].name;
//   var form_data = new FormData();
//   var ext = name.split('.').pop().toLowerCase();
//   if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
//   {
//    alert("Invalid Image File");
//   }
//   var oFReader = new FileReader();
//   oFReader.readAsDataURL(document.getElementById("file").files[0]);
//   var f = document.getElementById("file").files[0];
//   var fsize = f.size||f.fileSize;
//   if(fsize > 2000000)
//   {
//    alert("Image File Size is very big");
//   }
//   else
//   {
//    form_data.append("file", document.getElementById('file').files[0]);
//    $.ajax({
//     url:"upload.php",
//     method:"POST",
//     data: form_data,
//     contentType: false,
//     cache: false,
//     processData: false,
//     beforeSend:function(){
//      $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
//     },   
//     success:function(data)
//     {
//      $('#uploaded_image').html(data);
//     }
//    });
//   }
//  });
// });


$(document).ready(function(){
 $(document).on('change', '#photo', function(){
  var photo = document.getElementById("photo").files[0];
  var photo_name = photo.name;
  var photo_extension = photo_name.split('.').pop().toLowerCase();
  if(jQuery.inArray(photo_extension, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
//   var oFReader = new FileReader();
//   oFReader.readAsDataURL(document.getElementById("file").files[0]);
//   var f = document.getElementById("file").files[0];
  var photo_size = photo.size||f.fileSize;
  if(photo_size > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
    var form_data = new FormData(); 
    form_data.append("photo", photo);
    $.ajax({
        url:"upload",
        method:"POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend:function(){
            $('#profile-picture').html("<label class='text-success'>Image Uploading...</label>");
        },   
        success:function(data)
        {
            $('#uploaded_image').html(data);
        }
    });
  }
 });
});


$('.submit-form').click(function(){
  //add the value to be sent to the input in the form
  $('#link-extra-info input').val( $(this).data('submit') );
  
  //the href in the link becomes the action of the form
  $('#link-extra-info').attr('action', $(this).attr('href'));
  
  //submit the form
  $('#link-extra-info').submit();
  
  //return false to cancel the normal action for the click event
  return false;
});