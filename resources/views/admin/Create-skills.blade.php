@extends('layouts.page-layout')

@section('content')
<div class="container">
    <div class="col-6 align-item-center justify-content-center">
        <div id="success"></div>
        <form id="addskill" enctype="multipart/form-data" action="{{ route('storeskill') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
                <span class="invalid-feedback" id="title-error"></span>
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
                <span class="invalid-feedback" id="content-error"></span>
            </div>
            <div class="form-group mb-3">
                <label for="skill_image">Skill Image</label>
                <input type="file" name="skill_image" id="skill_image" class="form-control">
                <span class="invalid-feedback" id="skill_image-error"></span>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#addskill').submit(function (e) {
            e.preventDefault();
              
            var formData = new FormData($(this)[0]);
    
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('input').removeClass('is-invalid');
                    $('.invalid-feedback').text('');

                    $('#success').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                        response.message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                        '</div>');
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, error) {
                            $('#' + key ).addClass("is-invalid");
                            $('#' + key + '-error').text(error[0]);
                        });
                    } else {
                        console.error('An error occurred');
                    }
                }
            });
        });
    });
</script>
@endsection