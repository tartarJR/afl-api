@extends('layouts.app')

@section('content')

    <h5>Hakem Atama Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'referees.assign', 'id' => 'assign-referee-form']) !!}

        {{ csrf_field() }}

        <div>
            <h3>Account</h3>
            <section>
                @for ($i = 0; $i < 4; $i++)
                    <div class="form-row">
                        @for ($j = 0; $j < 2; $j++)
                            <div class="form-group col-md-3">
                                <label for="{{ lcfirst($refereeTypes[$keys[$i]]) . '-select' }}">{{ $refereeTypes[$keys[$i]] }}</label>
                            </div>
                        @endfor
                    </div>
                @endfor

                @foreach($refereeTypes as $id => $type)
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="{{ lcfirst($type) . '-select' }}">{{ $type }}</label>
                            {!! Form::select('season_id', $referees, null,['id' => lcfirst($type) . '-select', 'class' => 'form-control', 'placeholder' => 'Lütfen hakem seçiniz']) !!}
                        </div>
                    </div>
                @endforeach
            </section>
            <h3>Profile</h3>
            <section>
                <label for="name">First name *</label>
                <input id="name" name="name" type="text" class="required">
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" class="required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="required email">
                <label for="address">Address</label>
                <input id="address" name="address" type="text">
                <p>(*) Mandatory</p>
            </section>
            <h3>Hints</h3>
            <section>
                <ul>
                    <li>Foo</li>
                    <li>Bar</li>
                    <li>Foobar</li>
                </ul>
            </section>
            <h3>Finish</h3>
            <section>
                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label
                        for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
        </div>

        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

    <script src="{{ asset('js/referee/assign.js') }}" defer></script>
    <link href="{{ asset('css/libs/jquery.steps.css') }}" rel="stylesheet">
@endsection
