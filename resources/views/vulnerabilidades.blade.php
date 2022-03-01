@extends('layouts.app')
@extends('layouts.navbar')

@section('content')



<div class="container-fluid">
    <div class="row-full">
        <div class="col-auto ">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Vulnerabilidades') }}</div>
                <div class="card-body ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <iframe title="Gestión de Vulnerabilidades - Seguimiento Gestión de Vulnerabilidades" width="100%"
                        height="1100"
                        src="https://app.powerbi.com/reportEmbed?reportId=a5ae2d54-f054-42a0-83b8-aa6a306c454e&autoAuth=true&ctid=c4a8886b-f140-478b-ac47-249555c30afd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWNlbnRyYWwtdXMtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
                        frameborder="0" allowFullScreen="true"></iframe>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
