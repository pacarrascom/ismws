@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
@csrf
<div class="container">
    <div class="row-full">
        <div class="col-12 center ">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Indicadores') }}</div>
                <div class="card-body ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <iframe title="Dashboard_Base_Full_Diciembre - Portada" width="100%" height="750"
                        src="https://app.powerbi.com/reportEmbed?reportId=671eb36b-2928-43f5-8808-6adeeff38dbd&autoAuth=true&ctid=c4a8886b-f140-478b-ac47-249555c30afd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWNlbnRyYWwtdXMtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
                        frameborder="0" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
