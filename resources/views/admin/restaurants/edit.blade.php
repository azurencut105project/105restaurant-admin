@extends('admin.layouts.master')
@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <font color="#000000" face="微軟正黑體"><i class="fa fa-edit"></i>修改餐廳資料 </font>
        </h1>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->
<div class="row">
    <form action="/admin/restaurants/{{$restaurants->id}}" method="POST" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--店名--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('餐廳名稱') }}</font></label>
                            <div class="col-md-8">
                                <input name="name" class="form-control" placeholder="請輸入姓名" value="{{$restaurants->name}}" required>
                            </div>
                        </div>
                        {{--Logo--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="logo" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('Logo') }}</font></label>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<input name="logo" class="form-control" placeholder="請輸入職稱" value="{{$restaurants->logo}}" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--電話--}}
                        <div class="form-group row">
                            <label for="phone" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('電話') }}</font></label>
                            <div class="col-md-8">
                                <input name="phone" class="form-control" placeholder="請輸入電話" value="{{$restaurants->phone}}" required>
                            </div>
                        </div>
                        {{--地址--}}
                        <div class="form-group row">
                            <label for="address" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('地址') }}</font></label>
                            <div class="col-md-8">
                                <input name="address" class="form-control" placeholder="請輸入地址" value="{{$restaurants->address}}">
                            </div>
                        </div>
                        {{--信箱--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('信箱') }}</font></label>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$staff->email}}" placeholder="請輸入信箱" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--密碼--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('密碼') }}</font></label>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$staff->password}}" placeholder="請輸入密碼" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--確認密碼--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('確認密碼') }}</font></label>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$staff->password}}" placeholder="確認密碼" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--更新--}}
                        <div class="form-group row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3" style="text-align:center">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">確定</button>
                                </div>
                            </div>
                            <div class="col-md-3" style="text-align:center">
                                <button type="button" onclick="history.back()" class="btn btn-danger">取消</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
</div>

@endsection
