@php
    $comics = config('footnav.comics');
    $shop = config('footnav.shop');
    $dc = config('footnav.dc');
    $sites = config('footnav.sites');
    $icons = config('footnav.icons');
@endphp
<footer>
<div class="container ">
    <div class="row py-2">
        <div class="d-flex justify-content-between position-relative overflow-hidden">

            <div class="row">
                <div class="col-4">
                    <ul class=" list-unstyled ">
                        <h4 class="text-uppercase text-light">dc comics</h4>
                        @foreach ($comics as $comic)
                            <li class="text-light"><a href="#" class=" text-decoration-none text-light">{{$comic}}</a></li>
                        @endforeach

                    </ul>
                    <ul class=" list-unstyled ">
                        <h4 class="text-uppercase text-light">shop</h4>
                        @foreach ($shop as $shopEl)
                            <li class="text-light"><a href="#" class=" text-decoration-none text-light">{{$shopEl}}</a></li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-4">
                    <ul class=" list-unstyled ">
                        <h4 class="text-uppercase text-light">dc</h4>
                        @foreach ($dc as $dcEl)
                            <li class="text-light"><a href="#" class=" text-decoration-none text-light">{{$dcEl}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-4">
                    <ul class=" list-unstyled ">
                        <h4 class="text-uppercase text-light">sites</h4>
                        @foreach ($sites as $site)
                            <li class="text-light"><a href="#" class=" text-decoration-none text-light">{{$site}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bottom-footer">
    <div class=" container d-flex flex-row justify-content-between p-5 ">
    <button class="btn border-primary text-uppercase text-light">sign-up now</button>

<div class="d-flex flex-row ">
    <span class="text-primary text-uppercase">follow us</span>
    <ul class="d-flex flex-row list-unstyled ">
        @foreach ($icons as $icon )
        <li class="p-1" ><img src="{{Vite::asset($icon['image'])}}" alt="{{Vite::asset($icon['text'])}}"></li>
        @endforeach

    </ul>
</div>
</div>
</div>

</footer>
