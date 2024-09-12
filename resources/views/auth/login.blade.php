@extends('layout')

@section('content')

<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form method="POST" action="{{ route('login') }}"
              class="col-md-5 p-0 mx-auto">
              @csrf
              @method('POST')
            <div class="form-group">
                <label class="form-label"
                       for="email">إيميل:</label>
                <input id="email"
                       type="text"
                       class="form-control"
                       placeholder="اكتب ايميلك هنا"
                       value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label class="form-label"
                       for="password" lang="ar">كلمة المرور:</label>
                <input id="password"
                       type="password"
                       class="form-control"
                       placeholder="اكتب كلمة المرور هنا"
                       value="{{ old('password') }}">

                    @if (Route::has('password.request'))
                       <p class="text-left"><a href="{{ route('password.request') }}"
                        class="small">هل نسيت كلمة المرور؟</a></p>
                   @endif
               
            </div>
            <p lang="ar">لا تملك حساب من قبل؟ <a href="{{ route('register') }}">إنشاء حساب</a></p>
            <div class="text-center">
                <button class="btn btn-primary">تسجيل الدخول</button>
            </div>
        </form>
    </div>
</div>

@endsection

