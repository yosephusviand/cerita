@extends('layouts.admin')

@section('content')
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2>Diskusi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Diskusi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card" style="opacity: 90%">
                        <div class="header">
                            <h2>Riwayat Diskusi</h2>
                        </div>
                        <div class="body text-center">
                            <form action="{{ route('admin.diskusistore') }}" method="POST">
                                @csrf
                                <div class="cwidget-scroll">
                                    <ul class="chat-widget m-r-5 clearfix">
                                        @foreach ($data as $val)
                                            @if ($val->user == 1)
                                                <li class="left float-left">
                                                    <img src="{{ asset('img/profilee.png') }}" class="rounded-circle"
                                                        alt="">
                                                    <div class="chat-info">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <label for="">{{ $val->created_at }} /
                                                                    {{ $val->email }}</label> {{ $val->status_name }}
                                                            </div>
                                                            @if ($val->status == 2)
                                                                <div class="col-1 pl-1 text-right"><i
                                                                        class="fa fa-eye ml-2 hilangkan text-warning"
                                                                        data-id="{{ $val->id }}" data-key="munculkan"></i>
                                                                </div>
                                                            @else
                                                                <div class="col-1 pl-1 text-right"><i
                                                                        class="fa fa-eye-slash ml-2 munculkan text-primary"
                                                                        data-id="{{ $val->id }}" data-key="hilangkan"></i>
                                                                </div>
                                                            @endif
                                                            <div class="col-1 pl-1 text-left"><i
                                                                    class="fa fa-trash ml-2 hapusdiskusi text-danger" data-id="{{ $val->id }}"></i>
                                                            </div>
                                                        </div>

                                                        <span class="message">{{ $val->diskusi }}</span>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="right">
                                                    <img src="{{ asset('img/profilee.png') }}" class="rounded-circle"
                                                        alt="">
                                                    <div class="chat-info">
                                                        <label for="">{{ $val->created_at }} /
                                                            {{ $val->email }}</label>
                                                        <span class="message">{{ $val->diskusi }}</span>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="input-group p-t-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                    </div>
                                    <input type="text" name="diskusi" class="form-control" placeholder="Diskusi"
                                        autocomplete="off" required>
                                </div>
                                <div class="input-group p-t-15">
                                    <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
