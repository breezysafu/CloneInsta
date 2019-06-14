@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.ggpht.com/a/AGF-l7_sGUrG_alh-mdTIDmdcaw1GanuPL2PxVajjQ=s48-mo-c-c0xffffffff-rj-k-no" style="width:100px;height:100px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 pl-10">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a></div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong>posts</div>
                <div class="pr-5"><strong>1k</strong>followers</div>
                <div class="pr-5"><strong>369</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">username</div>
            <div>description</div>
            <div><a href="#">url</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pt-4">
                <a href="/p/{{$post->id}}">
                     <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>

</div>
@endsection
