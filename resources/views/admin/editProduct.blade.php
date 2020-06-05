@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-3">
            @include('errors.error')
            @if(session('addSuccess'))
                <p class="alert alert-success">{{ session('addSuccess') }}</p>
            @endif
            <form class="user-edit" method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Product Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="flower id" value="{{ $getProduct->id }}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productname" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="productname" placeholder="Flower name" name="name" value="{{ $getProduct->name }}">
                    </div>
                </div>
                {{--<p>Current Category: {{ $getProduct->productCat }} || Current Occasion: {{ $getProduct->occasionCat }}</p>--}}
                <div class="form-group row">

                    <label for="productcat" class="col-sm-2 col-form-label">Product Category</label>
                    <div class="col-sm-10">
                        @php
                            $arr = array('Callia Lillies','Cymbidium Orchid','Daises','Lilies','Hydrandgeas','Plants','Others');
                        @endphp
                        <select class="custom-select col-sm-10" name="productCat">
                            @foreach($arr as $a)
                                @if($getProduct->productCat == $a)
                                    <option value="{{ $a }}" selected>{{ $a }}</option>
                                @else
                                    <option value="{{ $a }}">{{ $a }}</option>
                                @endif
                            {{--<option value="" selected>select flower page</option>--}}
                            {{--<option value="Callia Lillies">Callia Lillies</option>--}}
                            {{--<option value="Cymbidium Orchid">Cymbidium Orchid</option>--}}
                            {{--<option value="Daises">Daises</option>--}}
                            {{--<option value="Hydrandgeas">Hydrandgeas</option>--}}
                            {{--<option value="Lilies">Lilies</option>--}}
                            {{--<option value="Plants">Plants</option>--}}
                            {{--<option value="Others">Others</option>--}}
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productcat" class="col-sm-2 col-form-label">Occasion</label>
                    <div class="col-sm-10">
                        @php
                        $arr1 = array('Love & Rommance','Birthday','Anniversary','Get Well Soon','Thank You','Congrats','Wedding');
                        @endphp
                        <select class="custom-select col-sm-10" name="occasionCat">

                            @foreach($arr1 as $a)
                                @if($getProduct->occasionCat == $a)
                                    <option value="{{ $a }}" selected>{{ $a }}</option>
                                @else
                                    <option value="{{ $a }}">{{ $a }}</option>
                                @endif
                            {{--<option value="" selected>select flower page</option>--}}
                            {{--<option value="Love & Rommance">Love & Rommance</option>--}}
                            {{--<option value="Birthday">Birthday</option>--}}
                            {{--<option value="Anniversary">Anniversary</option>--}}
                            {{--<option value="Get Well Soon">Get Well Soon</option>--}}
                            {{--<option value="Thank You">Thank You</option>--}}
                            {{--<option value="Congrats">Congrats</option>--}}
                            {{--<option value="Wedding">Wedding</option>--}}
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productprice" class="col-sm-2 col-form-label">Product Price*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="productprice" placeholder="Flower price" name="price" value="{{ $getProduct->price }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="productprice" class="col-sm-2 col-form-label">Product Discount Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="productprice" placeholder="Flower Discount price" name="discount" value="{{ $getProduct->discount }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Upload Image*</label>
                    <input type="file" class="form-file-input" name="picture">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection