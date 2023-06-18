$(document).ready(function() {
    $('#image-input').change(function() {
        var file = $(this)[0].files[0];
        var formData = new FormData();
        formData.append('image', file);

        $.ajax({
            url: 'processar-upload.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Lógica após o upload ser concluído
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Lógica em caso de erro no upload
                console.log(error);
            }
        });

        // Exibir a nova imagem selecionada
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#profile-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    });
});