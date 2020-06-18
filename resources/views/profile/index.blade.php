@extends('layouts.front')

@section ('content')
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2>プロフィール</h2>
                </div>
            </div>
        <hr color="#c0c0c0">

        <div class="row">
            <div class="col-md-8 mx-auto mt-3">
                <div class="post">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="title">
                                <h3>氏名</h3>
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($profile->name, 150) }}
                            </div>
                            <div class="title">
                                <h3>性別</h3>
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($profile->gender, 150) }}
                            </div>
                            <div class="title">
                                <h3>趣味</h3>
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($profile->hobby, 1500) }}
                            </div>
                            <div class="title">
                                <h3>自己紹介</h3>
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($profile->introduction, 1500) }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <hr color="#c0c0c0">


    </div>






@endsection