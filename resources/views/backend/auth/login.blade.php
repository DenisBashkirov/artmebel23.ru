@extends('backend.layouts.main')

@section('body')

<section class="section__wrapper">

    <div class="form login-form">

        <h1 class="ui header">
            Авторизация
            <div class="sub header">Вход в панель администратора сайта</div>
        </h1>

        <form method="POST" action="{{ route('login') }}" class="ui form">
            @csrf

            <div class="field">
                <label for="login">Email</label>
                <input type="text" name="email" id="login">
            </div>

            <div class="field">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <label for="remember">Запомнить</label>
                    <input type="checkbox" tabindex="0" class="hidden" id="remember">
                </div>
            </div>

            <button type="submit" class="ui button blue">
                Войти
            </button>

            <a href="{{ route('password.request') }}">Забыли пароль?</a>

        </form>
    </div>

</section>

@endsection
