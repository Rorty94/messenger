@extends('layouts.app')

@section('content')
    <b-container>
        <b-row align-h="center">
            <b-col cols="8">
                <b-card title="Registro" class="my-1">


                    @if ($errors->any())
                        <b-alert show variant="danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </b-alert>
                    @else
                        <b-alert show>
                            Por favor ingresa tus datos:
                        </b-alert>
                    @endif
                    <b-form method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <b-form-group label="Nombre" label-for="name">

                            <b-form-input id="name" type="text" required value="{{ old('name') }}" name="name" autofocus>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Correo Electrónico" label-for="email"
                            description="Nunca compartiremos tu correo. Está seguro con nosotros.">

                            <b-form-input id="email" type="email" required value="{{ old('email') }}"
                                placeholder="Ingresa aquí tu correo" name="email">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Contraseña" label-for="password">

                            <b-form-input id="password" type="password" required name="password">
                            </b-form-input>

                        </b-form-group>

                        <b-form-group label="Confirmar contraseña" label-for="password_confirmation">

                            <b-form-input id="password_confirmation" type="password" required name="password_confirmation">
                            </b-form-input>

                        </b-form-group>

                        <b-button type="submit" variant="primary">
                            Confirmar registro
                        </b-button>

                        <b-button href="{{ route('login') }}" variant="link">
                            Ya te has registrado?
                        </b-button>
                    </b-form>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
@endsection
