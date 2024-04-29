@extends('layouts.auth-layout')
@section('content')
<div class="container">
    <div class="col-6  align-item-center justify-content-center ">
        <form id="loginData" action="{{ route('login')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <div class="invalid-feedback" id="email_error"></div>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <div class="invalid-feedback" id="password_error"></div>
            </div>
            <input type="button" id="login" value="login" class="btn btn-primary">
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#login").click(function(e){
            e.preventDefault();
            var loginData = $("#loginData").serialize();
            console.log(loginData);
            $.ajax({
                type:"POST",
                url: $("#loginData").attr("action"),
                data:loginData,
                success: function(response){
                if (response.status == false) {
                    $.each(response.errors, function(key, value) {
                        $("#" + key + "_error").html(value); // Assuming error elements have IDs like "email_error", "password_error", etc.
                        $("#" + key ).addClass('is-invalid');
                    });
                }
             }
            });
        })
    });
</script>
@endsection
