@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['desc']; ?>
@endsection
@section('keywords')
<?php echo $category['key']; ?>
@endsection
@section('robots')
<?php if ( $category['robot'] == 0 ) echo "index, follow";  elseif ( $category['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$category['slug']; ?>
@endsection

@section('content')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a>{{$category->name}}</a></li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-3-4">
                    <section class="artcatalogue">
                        <header class="panel-head">
                            <h1 class="heading-2"><span>{{$category->name}}</span></h1>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-list list-article">
                                @foreach($news as $val)
                                <li>
                                    <article class="article uk-clearfix">
                                        <div class="thumb img-flash">
                                            <a class="image img-cover" href="{{$val->slug}}/{{$val->id}}.html" title="{{$val->name}}"><img src="{{$val->img}}" alt="{{$val->name}}"></a>
                                        </div>
                                        <div class="info">
                                            <h2 class="title"><a href="{{$val->slug}}/{{$val->id}}.html" title="{{$val->name}}">{{$val->name}}</a></h2>
                                            <div class="meta">
                                                <i class="fa fa-user"></i> {{$val->user}}
                                                <i class="fa fa-clock-o"></i> {{$val->date}}
                                                <i class="fa fa-eye"></i> {{$val->hits}} view
                                            </div>
                                            <div class="description lib-line-4">{{$val->detail}}</div>
                                        </div>
                                    </article>
                                </li>
                                @endforeach
                            </ul>
                        </section>
                        <footer class="panel-foot">
							{!! $news->links() !!}
							<div class='clr'><div>
						</footer>
                    </section>
                </div>
                @include('layout.sitebar')
            </div>
        </div>
    </div>
</section>
@endsection