@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="px-4 py-4">
                        <h1 class="text-center">Scan code with Authenticator app</h1>
                        <p class="text-center">In case of problems use {{ $secret }}</p>
                        <div class="row justify-content-center">
                            {!! $QR_Image !!}
                        </div>
                    </div>

                    <a href="{{route('complete.registration')}}" class="btn btn-primary">Finish registration</a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection