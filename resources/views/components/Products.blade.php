@props(['product'])
<div class="row">
    @if(count($product) == 0)
    <div class="heading_container heading_center">
      <h3>
        No Products Found
      </h3>
    </div>
    @endif
    @foreach($product as $p)
    <div class="col-sm-6 col-lg-4">
      <div class="box">
        <div class="img-box">
        
          <a href="/Product/{{ $p->id }}">
            <img src="/{{ $p->img }}" alt="">
          </a>
        </div>
        <div class="detail-box">
          <a  href="/Product/{{ $p->id }}">
          <h5>
            {{ $p->name }}
          </h5>
        </a>
          <div class="product_info">
            <h5>
              <span style="color:red">EGP</span> {{ $p->price }}
            </h5>
            <div class="star_container">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>