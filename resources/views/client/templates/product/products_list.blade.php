@extends('client.templates.layout.layout')
@section('content')
    <div class="site-index">

        <div class="margin-bottom-30"></div>

        <div class="khung_trangchu">
            <div class="pagewrap">
                <div class="_box-content">
                    <div class="row">
                        <div class="col-xs-12 wow fadeInDown">
                            <div class="_title-dm text-center">
                                <h3>{{ $find_item->tenvi }}</h3>
                                <p> {{ $find_item->motavi != '' ? '"' . $find_item->motavi . ' ".' : '' }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-10"></div>
                    @if (isset($items) && count($items) > 0)
                        <div data-id="{{ $find_item->id }}" id="show_{{ $find_item->id }}"
                            class="owl-carousel owl-theme owl-carousel4-brands">
                            @foreach ($items as $v)
                                <div class="text-center">
                                    <div class="_boxpr">
                                        <div class="_imgsp">
                                            <a href="/san-pham/item/{{ $v->tenkhongdauvi }}"><img
                                                    src="{{ asset('uploads/' . $v->photo) }}"
                                                    onerror="this.src='{{ asset('uploads/noimage/noimage.png') }}';"
                                                    alt="{{ $v->tenvi }}" /></a>
                                        </div>
                                        <div class="_box-price">
                                            <div class="_namepr"><a href="/san-pham/item/{{ $v->tenkhongdauvi }}"
                                                    title="{{ $v->tenvi }}">{{ $v->tenvi }}</a></div>
                                            @if ($v->giamoi != 0)
                                                <div class="_pricekm">
                                                    Giá:&nbsp{{ number_format($v->giamoi) . ' VNĐ' }} </div>
                                                <div class="_pricegoc">
                                                    {{ $v->gia != 0 ? number_format($v->gia) . ' VNĐ' : '' }}
                                                </div>
                                            @else
                                                <div class="_pricekm">
                                                    Giá:&nbsp{{ $v->gia != 0 ? number_format($v->gia) . ' VNĐ' : ' Liên hệ.' }}
                                                </div>
                                            @endif



                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif


                </div>
                <div class="clearfix margin-bottom-20"></div>

            </div>
        </div>

    </div>
@endsection
