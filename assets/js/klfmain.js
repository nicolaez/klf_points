//NOTE: this code is jquery, go to JQuery.com and find the download then link it in a script tag

$("#activateFile").on('click', function(){
    $("#fileBrowser").click();
  //  alert('da1');
});

//if you want a finish edit button then use this otherwise put this code in the fileBrowser change event handler below KEEP THE readURL(this) OR IT WON'T WORK!

$("#finishEdit").on('click', function(){
    var imgData = document.getElementById('image').src;
    //imageData is the variable you use $_POST to get the data in php
//    $.post('phpscriptname.php', {imageData:imgData}, function(data){
        //recieve information back from php through the echo function(not required)
 //   });
});


$("#fileBrowser").change(function(){
  console.log('da2');
    var imgData = document.getElementById('image').src;
    console.log(imgData);
    document.getElementById('image_blob').src= document.getElementById('image').src;
    document.getElementById('image_path').val('something');
    console.log(imgData);
 //   readURL(this);

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image').attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}