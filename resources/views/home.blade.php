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
                    <img src="{{asset('img/chief1.jpg')}}" width="80px;">

                    {{ __('You are logged in!') }}

                    <dir>
                        

                        <table class="table">
                            <a href="#"> Users  List </a>
                            <thead style="border: solid 1px;">
                                <tr>
                                  <th scope="col">id</th>
                                  <th>  Full Name  </th>
                                   <th>  Adresse </th>
                                  <th>  Email  </th>
                                  <th>  phone number  </th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                  <th scope="row" style="color:red;"> {{ $user->id }}</th>
                                      <td>{{ $user->name}}</td>
                                       <td>{{ $user->adresse->adresse1}}</td>
                                      <td>{{ $user->email}}</td>
                                      <td>{{ $user->phone}}</td>
                                 </tr>

                                @endforeach


                            </tbody>


                        </table>


                        <table class="table">
                            <a href="#">Menus  List</a>
                            <thead style="border: solid 1px;">
                                <tr>
                                  <th scope="col">id</th>
                                  <th> Nom Menu </th>
                                   <th>  Description </th>
                                  

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($menus as $menu)
                                <tr>
                                  <th scope="row" style="color:red;"> {{ $menu->id }}</th>
                                      <td>{{ $menu->nom }}</td>
                                       <td>{{$menu->description}}</td>
                                     
                                </tr>

                                @endforeach


                            </tbody>


                        </table>

                         <table class="table">
                            <a href="#">Plats  List</a>
                            <thead style="border: solid 1px;">
                                <tr>
                                  <th scope="col">id</th>
                                 
                                   <th>  user id </th>
                                   <th>  menu id </th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($plats as $plat)
                                <tr>
                                  <th scope="row" style="color:red;"> {{ $plat->id }}</th>
                                      <td>{{ $plat->menu_id }}</td>
                                       <td>{{$plat->user_id}}</td>
                                     
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
