@extends('layout.index')

@section('title')
<?php if ( $singlenews['title'] == '' ) echo $singlenews['name']; else echo $singlenews['title']; ?>
@endsection
@section('description')
<?php echo $singlenews['desc']; ?>
@endsection
@section('keywords')
<?php echo $singlenews['key']; ?>
@endsection
@section('robots')
<?php if ( $singlenews['robot'] == 0 ) echo "index, follow";  elseif ( $singlenews['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$singlenews['slug']; ?>
@endsection

@section('content')
<main id="main" class="">
<div id="content" class="blog-wrapper blog-single page-wrapper">
<div class="row row-large row-divided ">
<div class="large-9 col">
<article id="post-287" class="post-287 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc tag-d-le-roi-soleil">
<div class="article-inner ">
<header class="entry-header">
<div class="entry-header-text-top text-left">
	<h1 class="entry-title">{{$singlenews->name}}</h1>
	<hr>
</div><!-- .entry-header -->
</header><!-- post-header -->
<div class="entry-content single-page" style="padding-top: 0px;">
<article class="content_detail fck_detail width_common block_ads_connect">
{!!$singlenews->content!!}

<div class="form-single">
	<div class="content-form">
	<h4 class="title-form">HOTLINE: 0938.95.4444</h4>
	<div role="form" class="wpcf7" id="wpcf7-f29-p287-o1" lang="vi" dir="ltr">
		<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
			<div class="form-flat">
			@include('layout.form')
			<p class="submit text-center"><input type="submit" value="ĐĂNG KÝ NGAY" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
			</div>
		</form>
	</div>
	</div>
</div>


<div class="clearfix"></div>
</div><!-- .entry-content2 -->

</div><!-- .article-inner -->
</article><!-- #-296 -->

</div> <!-- .large-9 -->

<div class="post-sidebar large-3 col">
<div id="secondary" class="widget-area " role="complementary">

<aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts"><span class="widget-title "><span>Tin tức mới nhất</span></span><div class="is-divider small"></div>
	<ul>
		@foreach($tinlienquan as $val)
		<li class="recent-blog-posts-li">
		<div class="flex-row recent-blog-posts align-top pt-half pb-half">
		<div class="flex-col mr-half">
		<div class="badge post-date  badge-outline">
		<div class="badge-inner bg-fill" style="background: url(data/news/80-60/{{$val->img}}); border:0;">
		</div>
		</div>
		</div><!-- .flex-col -->
		<div class="flex-col flex-grow">
		<a href="{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a>
		</div>
		</div><!-- .flex-row -->
		</li>
		@endforeach
	</ul>
</aside>
</div><!-- #secondary -->
</div><!-- .post-sidebar -->
</div><!-- .row -->
</div><!-- #content .page-wrapper -->

</main>
@endsection