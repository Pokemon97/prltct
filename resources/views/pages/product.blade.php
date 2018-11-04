@extends('master')
@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="row" style="align-items: center; padding-left: 40px">
            <div class="col-sm-4">
                <img src="source/image/product/{{$product->image}}"/>
            </div>
            <div class="col-sm-8">
                <div class="single-item-body">
                    <p class="single-item-title"><h2>{{$product->name}}</h2></p>
                    <br/>
                    <p class="single-item-price">
                        <span>Giá:</span>
                        @if($product->promotion_price != 0)
                            <span class="flash-del">{{$product->unit_price}}đ</span>
                            <span class="flash-sale">{{$product->promotion_price}}đ</span>
                        @else
                            <span class="flash-sale">{{$product->unit_price}}đ</span>
                        @endif
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="space20">&nbsp;</div>
                <div class="single-item-desc">
                    <span style="font-size: 16px">Mô tả:</span><span style="font-size: 16px">{!!$product->description!!}</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection