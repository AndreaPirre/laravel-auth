@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    EMPLOYEES:
                    {{ $emp -> firstname }}
                    {{ $emp -> lastname }}

                </div>

                <div class="card-body">
                    <ul>
                        <li>
                        Firstname: {{$emp -> firstname }}
                        </li>
                        <li>
                        Lastname: {{$emp -> lastname }}
                        </li>
                        <li>
                        Date of birth: {{$emp -> date_of_birth }}
                        </li>
                        <li>
                        Private code: {{$emp -> private_code }}
                        </li>
                        <li>
                        Location: {{$emp -> location -> name }}
                        </li>


                    </ul>
                    @auth
                    <br> <br>
                    <a class="btn btn-primary" href="">EDIT</a>
                    <a class="btn btn-danger" href="{{ route('emp.delete', $emp -> id) }}">DELETE</a>
                    @else
                    PER ELIMINARE UN UTENTE DEVI ESSERE LOGGATO! ESEGUI L'ACCESSO OPPURE REGISTRATI.
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
