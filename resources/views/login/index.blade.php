
@extends('layouts.base')
@section('page.name', 'Cтраница входа')


@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
            <x-card>
                <x-card-header>
                    <h4 class="m-0">
                        LOGIN
                    </h4>
                </x-card-header>
                <div class="card-body">
                    <form action="{{route('login.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-controll" autofocus>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-controll" >
                        </div>
                        <button type="submit" class="btn btn-primary">Log</button>
                    </form>
                </div>
            </x-card>
        </div>
    </div>
</section>
@endsection
