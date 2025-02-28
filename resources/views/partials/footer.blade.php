    <footer class="py-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-sm-start mb-3">
                    <a href="{{ route('home') }}">
                        <img
                            width="250"
                            style="height: auto; object-fit: cover"
                            src="{{ asset('frontend/assets/images/icon_web.png') }}"
                            alt=""
                        />
                    </a>
                    <p class="title-alt mt-4">
                        {!! config('app.name', 'Let&#39;s Go Bandung') !!}
                    </p>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Home</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Payment</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Order</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Facebook</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Instagram</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="#" class="title">Youtube</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="mailto:grahadim178@gmail.com" class="title">example@gmail.com</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title">Jln medan raya kode post 12345</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid text-center py-4 border-top mt-4">
                <small>@Copyright • {!! config('app.name', 'Let&#39;s Go Bandung') !!} <?= "2019-".date('Y') ?> • All reserved</small>
            </div>
        </div>
    </footer>
