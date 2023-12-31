<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'RobertoRamírez' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/globalstyles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlace a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <title>{{ $title ?? 'AllforYou.com' }}</title>
</head>
<body>
    <x-navbar />
    
    {{$slot}}
    
    <x-footer />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
  
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addImageFieldButton = document.getElementById('addImageField');
        const imageFieldsContainer = document.getElementById('imageFieldsContainer');
        let imageFieldIndex = 0;

        addImageFieldButton.addEventListener('click', function() {
            const newImageField = document.createElement('input');
            newImageField.type = 'file';
            newImageField.className = 'form-control mt-2';
            newImageField.name = `additional_images[]`;
            newImageField.multiple = true;

            imageFieldsContainer.appendChild(newImageField);
        });
    });
</script>
    
</body>
</html>