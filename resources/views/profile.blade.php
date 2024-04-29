@extends('layouts.page-layout')


@section('content')
<h1>Profile {{ $admin->name }}</h1>
<div class="container">
    <div class="col-6 align-item-center justify-content-center">

        <div id="updateProfileMessage" class="alert alert-success alert-dismissible fade hide" role="alert">
            <div id="dis"></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <form id="updateProfileForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="{{ $admin->id }}">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $admin->name }}" class="form-control">
                <span class="invalid-feedback" id="name-error"></span>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $admin->email }}" class="form-control">
                <span class="invalid-feedback" id="email-error"></span>
            </div>
            <div class="form-group mb-3">
                <label for="phone">Phone No</label>
                <input type="text" name="phNo" id="phNo" value="{{ $admin->phNo }}" class="form-control">
                <span class="invalid-feedback" id="phNo-error"></span>
            </div>
            <div class="form-group mb-3">
                <label for="profile_image">Profile Image</label>
                <input type="file" name="proimage" id="proimage" class="form-control">
                <span class="invalid-feedback" id="proimage-error"></span>
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
    <p id="updateProfileMessage"></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
            $('#updateProfileForm').submit(function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);

                $.ajax({
                    type: 'POST',
                    url: '{{ route("updateprofile") }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        alert(response); // For debugging, you can remove this later
                        $('#dis').text(response.success).addClass('text-success');
                        // Show the success message
                        $("#updateProfileMessage").removeClass('hide').addClass('show');
                        // Clear previous errors
                        $('.invalid-feedback').text('');
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            // Show validation errors
                            if (errors) {
                                $.each(errors, function(key, error) {
                                    $('#' + key ).addClass("is-invalid");
                                    $('#' + key + '-error').text(error[0]);
                                });
                            }
                        } else {
                            console.error('An error occurred');
                        }
                        // Clear success message
                        $('#updateProfileMessage').text('').removeClass('text-success');
                    }
                });
            });
        });
</script>
@endsection
