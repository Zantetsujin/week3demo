@extends('base')

@section("content")
    <div class="row">
        <div class="col md-3 m-1 p-1 bg-primary">
            Column 1 of 2
        </div>
        <div class="col m-2 p-1 bg-secondary">
            Column 2 of 2
        </div>
    </div>

    <div id="notificationModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="usernameModal">Username: </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            Param 1: {{$param1}}
            @if ($param1 === 'a')
                <br> 
                Parameter 1 value is a
            @endif
        </div>
        <div class="col">
            Param 2: {{$param2}}
            @if(isset($param3))
                <br>
                Optional parameter 3: {{$param3}}
            @endif
        </div>
    </div>

    <form id="frmLogin">
        <!-- username -->
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
            <label for="username">Username</label>
        </div>

        <!-- password -->
        <div class="form-floating mt-1">
            <input type="password" class="form-control" name="password" id="password" placeholder="1234">
            <label for="password">Password</label>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
        </div>
    </form>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#frmLogin").on('submit', function() {
                console.log("Form disubmit");
                $("#usernameModal").html("Username: " + username);

                <!-- trigger open modal -->
                $("#notificationModal").modal('show');
                return false;
            })
        })
    </script>
@endsection