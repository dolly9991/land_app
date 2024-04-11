@extends('layouts.app')

@section('content')
<div class="container">
<style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 210px;
            background-color: darkslategrey;
            padding-top: 0px;
            overflow-x: hidden;
            transition: all 0.3s;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        .sidebar  img {
            width: 80px;
            height: 50px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .sidebar .dropdown {
            display: none;
            position: relative;
            background-color: darkslategrey;
            padding-left: 20px;
        }
        .sidebar .dropdown li a {
            display: block;
            padding: 5px;
            font-size: 16px;
        }
        .sidebar a:hover +.dropdown,
        .dropdown:hover {
            display: block;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
            }
        }
        h3 {text-align: center;}
        .links {text-align: center;}
        
    </style>
<div class="sidebar"> 
        <hr>
        <div class="links">

        <img class="center" src="images/capture.jpeg" alt="Logo"> 
        <br><hr>
        <h3>ADMIN</h3>
        <hr>
        <a href="/redirects">Dashboard</a>
        <a href="{{ route('/viewUsers') }}">Users</a>
        <a  href="#">Security</a>
            <ul class="dropdown">
                <li><a href="#">Access Control</a></li>
                <li><a href="#">Permissions</a></li>
                <li><a href="#">3</a></li>
            </ul>
        <a href="#">Notifications</a>
        <a href="#">Payments</a>
        </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
            <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Names</th>
            <th>Omang IDs</th>
            <th>Phone Numbers</th>
            <th>Emails</th>
            <th>Password</th>
            <th>Roles</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->omangID }}</td>
                <td>{{ $user->phoneNumber }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
