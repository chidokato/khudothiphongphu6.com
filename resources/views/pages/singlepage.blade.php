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

<div class="container">
	<nav class="breadcrumb" aria-label="breadcrumbs">
		<a href="{{asset('')}}" title="Back to the frontpage">Trang chủ</a>
		<span aria-hidden="true" class="breadcrumb__sep">/</span>
		<span>{{$category->name}}</span>
	</nav>
</div>
<div class="container">
	<div class="row">
		@include('layout.sitebar')
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<header class="section-header section-header--large">
				<div class="toolbar">
					<label>{{$category->name}}</label> 
					<div class="clr"></div>
				</div>
			</header>
			<div class="content">
				{!!$category->content!!}
				
				<hr>
				<div class="fb-comments" xid="{{$category->id}}" data-width="100%" data-numposts="5"></div>
			</div>
		</div>
	</div>
</div>

@endsection