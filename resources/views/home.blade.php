@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <dir>
                        

                        <table class="table">
                            <a href="#">Users  List</a>
                            <thead style="border: solid 1px;">
                                <tr>
                                  <th scope="col">#</th>
                                  <th>  Full Name  </th>
                                  <th>  Email  </th>
                                  <th>  phone number  </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                  <th scope="row"></th>
                                      <td>{{$user->name}}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{{$user->phone}}</td>
                                </tr>

                                @endforeach


                            </tbody>


                        </table>


                    </dir>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
