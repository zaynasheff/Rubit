@extends('layouts.app')

@section('content')

    <div id="cab">


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

        <h4>Вы авторизованы</h4>



        <h1>Тут будет кабинет юзера</h1>

    </div>


@endsection
