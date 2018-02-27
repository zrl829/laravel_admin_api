@extends('layout.main')
@section('content')
        <!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-10">
            <div class="box">

                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">稿件详情</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h2 class="news-title">{{$news->title}}</h2>
                        <p class="news-meta">创建时间: {{$news->created_at->toFormattedDateString()}}  点击数: {{$news->hits}}</p>
                        <p class="news-keywords">关键词: {{$news->keywords}}</p>
                        <div class="news-content">
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection