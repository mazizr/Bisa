@extends('layouts.index2')
@section('content')
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Artikel</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{ $artikel->judul }}</h2>
            <p>{!! $artikel->konten !!}</p>
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
                @foreach($artikel->tag as $data)
              <div class="tagcloud">
                <a class="tag-cloud-link" href="/blog-tag/{{ $data->slug }}">
                  # {{ $data->nama_tag }}
              </a>
              </div>
              @endforeach
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate order-first">
            
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                @foreach($kategori as $data)
                      
                            <li><a href="/blog-kategori/{{ $data->slug }}"
                              class="justify-content-between align-items-center d-flex">
                              <h6>{{ $data->nama_kategori }}</h6> <span>{{ $data->artikel->count() }}</span>
                            </a></li>        
                @endforeach
                
                
              </div>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              @foreach($tag as $data)
              <div class="tagcloud">
                <a class="tag-cloud-link" href="/blog-tag/{{ $data->slug }}">
                  # {{ $data->nama_tag }}
              </a>
              </div>
              @endforeach
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->
@endsection