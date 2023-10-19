@extends('layouts.app')

@section('content')
<!-- <div class="container">
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
                </div>
            </div>
        </div>
    </div>
</div> -->

<center>
<table border=2px class="slid">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                            @foreach($data as $key => $list)
                                 @if(Auth::user()->email == $list->email)
                            

                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->contact }}</td>
                                <td>{{ $list->email }}</td>
                                <td>{{ $list->password }}</td>
                            </tr>
                           
                        
                       @endif
                            @endforeach
                         </table>
                         </center>
               <center>              
 <div class="for">
 <h2>Create new data</h2>
<form action="/contact/store" method="POST">
@csrf
    Name : <br><input type="text" name="name"><br>
    Contact : <br><input type="text" name="contact"><br>
    Email : <br><input type="text" name="email"><br>
    Password : <br><input type="text" name="password"><br><br>
    <button>Save Data</button>
</form>
</div>
</center>

@endsection
