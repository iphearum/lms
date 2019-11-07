@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @role('admin')
                    <h1>I am Admin</h1>
                    @else
                    @role('owner')
                    <h1>I am Owner</h1>
                    @else
                    <h1>I am user</h1>
                    @endrole
                    @endrole
                    @hasanyrole('writer|admin')
                        I am either a writer or an admin or both!
                    @else
                        I have none of these roles...
                    @endhasanyrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
