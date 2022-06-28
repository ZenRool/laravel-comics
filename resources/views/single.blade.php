@extends("layouts.app")

@section("title")
    {{ $comic["title"] }}
@endsection

@section("main_content")
    <div class="single">
        <div class="blue-band"></div>
        <div class="container">
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="comic_band comic_band_top">
                    Comic Book
                </div>
                <div class="comic_band comic_band_bottom">
                    View gallery
                </div>
            </div>
            <div class="flex">
                <div class="left">
                    <h1>
                        {{ $comic["title"] }}
                    </h1>
                    <div class="green">
                        <div class="left">
                            <p>
                                <span class="trasparent">
                                    U.S. price:     
                                </span>
                                {{ $comic["price"] }}
                            </p>
                            <p class="trasparent">
                                available
                            </p>
                        </div>
                        <div class="right">
                            <select name="Check" id="chack">
                                <option>
                                    Check Aviability
                                </option>
                            </select>
                        </div>
                    </div>
                    <p class="description">
                        {{  $comic["description"] }}
                    </p>
                </div>
                <div class="right">
                    <h2>
                        advertisment
                    </h2>
                    <img src="{{ asset('images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection