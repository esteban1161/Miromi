$(document).ready(function (){
    $('#foto').fileinput({
        language: 'es',
        allowedFileExtensions: ['jpg', 'jpeg', 'png'], 
        maxFileSize: 2000,
        showUpload: false,
        showClose: false,
        initialPreviewAsData: true,
        dropZoneEnabled: false,
        theme: "fas",
    });
});