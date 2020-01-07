@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <div class="col-md-6">
                            <h3>{{$user->name}} {{$user->surname}} </h3>
                            <p class="h5 text-primary mt-2 d-block font-weight-light">
                                {{ $user->email }}
                            </p>
                            <dl class="row mt-4 mb-4 pb-3">
                                <dt class="col-sm-4">Birthday</dt>
                                <dd class="col-sm-8">{{ $user->birthdate }}</dd>

                                <dt class="col-sm-4">Sex</dt>
                                <dd class="col-sm-8">
                                    @if($user->sex == 0)
                                        Male
                                    @elseif($user->sex == 1)
                                        Female
                                    @else
                                        Other
                                    @endif
                                </dd>

                                <dt class="col-sm-4">City</dt>
                                <dd class="col-sm-8">{{ $user->city }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
