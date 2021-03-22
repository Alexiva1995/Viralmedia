@php
$news = \App\Models\News::where('status', '1')->get();
@endphp
@if ($news->status = '1')
<div class="modal fade" tabindex="99" role="dialog" id="modalNew" data-backdrop="static" style="z-index: 99999999999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center justify-content-center">
                {{-- <h2 class="modal-title">Noticias</h2> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="news-modal" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        @foreach ($news as $new)
                        @if($loop->first)
                        <li data-target="#news-modal" data-slide-to="{{ $loop->iteration }}" class="active"></li>
                        @else
                        <li data-target="#news-modal" data-slide-to="{{ $loop->iteration }}"></li>
                        @endif
                        @endforeach
                    </ul>
                    <div class="carousel-inner">
                        @foreach ($news as $new)
                        @if($loop->first)
                        <div class="carousel-item active">
                            @else
                            <div class="carousel-item">
                                @endif
                                <section class="text-center">
                                <h4 class="card-title mt-2"><strong>
                                    {{$new->title}}
                                </strong></h4>

                                <h4><p class="card-text">{{$new->description}}</p></h4>
                                </section>
                                <center>
                                    @if(!$new->getMedia('photo')->isEmpty())
                                        <img src="{{ $new->getMedia('photo')->first()->getUrl() }}" alt="{{ $new->title }}" width="1000" height="1000" class="img-fluid">
                                    @endif
                                </center>
                            </div>
                            @endforeach
                        </div>
                        @if(count($news) > 1)
                        <a class="carousel-control-prev" href="#news-modal" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#news-modal" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        @endif
                    </div>

                </div>
                {{-- <div class="modal-footer"></div> --}}
            </div>
        </div>
    </div>
</div>
@else
<h1>sadasdasd</h1>
@endif