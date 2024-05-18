<style>
    #hideMe {
        animation: removeElement 1ms ease-in 5s forwards;
        animation-fill-mode: forwards;
    }

    @keyframes removeElement {
        to {
            display: none;
        }
    }
</style>
@if (Session::has('message'))
    <div class="alert alert-{{ Session::get('m-color') }}" dir="{{ Session::get('m-dir') }}" id="hideMe">
        {{ Session::get('message') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-warning" dir="{{ Session::get('m-dir') }}" id="hideMe">
        خطأ في البيانات المدخلة
    </div>
@endif
