@extends('client.master')
@section('content')
<div class="shell">
    <div class="flex-container">
        @if (!empty($products))
            @foreach ($products as $item)
                <div class="col-sm-2" style="width: 20%">
                    <a href="{{route('client.getDetail',['id'=>$item->id])}}" style="color: black; text-decoration : none;">
                        <div class="wsk-cp-product shadow">
                            <div class="wsk-cp-img"><img src="{{asset($item->hinhAnh)}}" alt="Product" class="img-responsive" /></div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                <span>{{$item->tenHieu}}</span>
                                </div>
                                <div class="title-product">
                                <h3>{{$item->tenSP}}</h3>
                                </div>
                                <div class="description-prod">
                                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                                </div>
                                <div class="card-footer">
                                <div class="wcf-left"><span class="price">{{displayPrice($item->giaBan)}}</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <div>
                <img src="{{asset('assets/image/empty-search.webp')}}" alt="">
                <p></p>
            </div>
        @endif
    </div>
</div>

@endsection
<style>
    .container {
        background-color: white;
    }
    .flex-container{
        display: flex;
        flex-direction:row;
        flex-wrap:wrap;
    }


.wsk-cp-product{
  background:#fff;
  padding:15px;
  border-radius:6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  position:relative;
  margin:20px auto;
}
.wsk-cp-img{
  position:absolute;
  top:5px;
  left:50%;
  transform:translate(-50%);
  -webkit-transform:translate(-50%);
  -ms-transform:translate(-50%);
  -moz-transform:translate(-50%);
  -o-transform:translate(-50%);
  -khtml-transform:translate(-50%);
  width: 100%;
  padding: 15px;
  transition: all 0.2s ease-in-out;
  display: flex;
    justify-content: center;
}
.wsk-cp-img img{
  width:80%;
  transition: all 0.2s ease-in-out;
  border-radius:6px;
  border-radius: 21px;
}
.wsk-cp-product:hover .wsk-cp-img{
  top:-40px;
}

.wsk-cp-text{
  padding-top:110%;
}
.wsk-cp-text .category{
  text-align:center;
  font-size:12px;
  font-weight:bold;
  padding:5px;
  margin-bottom:45px;
  position:relative;
  transition: all 0.2s ease-in-out;
}
.wsk-cp-text .category > *{
  position:absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  -moz-transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  -o-transform: translate(-50%,-50%);
  -khtml-transform: translate(-50%,-50%);

}
.wsk-cp-text .category > span{
  padding: 12px 30px;
  border: 1px solid #B31312;
  background:#d70018;
  color:#fff;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  border-radius:27px;
  transition: all 0.05s ease-in-out;

}
.wsk-cp-product:hover .wsk-cp-text .category > span{
  border-color:#ddd;
  box-shadow: none;
  padding: 11px 28px;
}
.wsk-cp-product:hover .wsk-cp-text .category{
  margin-top: 0px;
}
.wsk-cp-text .title-product{
  text-align:center;
}
.wsk-cp-text .title-product h3{
  font-size:20px;
  font-weight:bold;
  margin:15px auto;
  overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  width:100%;
}
.wsk-cp-text .description-prod p{
  margin:0;
}
/* Truncate */
.wsk-cp-text .description-prod {
  text-align:center;
  width: 100%;
  height:62px;
  overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  margin-bottom:15px;
}
.card-footer{
  padding: 25px 0 5px;
  border-top: 1px solid #ddd;
}
.card-footer:after, .card-footer:before{
  content:'';
  display:table;
}
.card-footer:after{
  clear:both;
}

.card-footer .wcf-left{
  float:left;
  color: #d70018;

}

.card-footer .wcf-right{
  float:right;
}

.price{
  font-size:18px;
  font-weight:bold;
}

a.buy-btn{
  display:block;
  color:#212121;
  text-align:center;
  font-size: 18px;
  width:35px;
  height:35px;
  line-height:35px;
  border-radius:50%;
  border:1px solid #212121;
  transition: all 0.2s ease-in-out;
}
a.buy-btn:hover , a.buy-btn:active, a.buy-btn:focus{
  border-color: #FF9800;
  background: #FF9800;
  color: #fff;
  text-decoration:none;
}
.wsk-btn:hover, .wsk-btn:focus, .wsk-btn:active{
  text-decoration:none;
  color:#fff;
}
.red{
  color:#F44336;
  font-size:22px;
  display:inline-block;
  margin: 0 5px;
}
@media screen and (max-width: 991px) {
  .wsk-cp-product{
    margin:40px auto;
  }
  .wsk-cp-product .wsk-cp-img{
  top:-40px;
}
.wsk-cp-product .wsk-cp-img img{
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
  .wsk-cp-product .wsk-cp-text .category > span{
  border-color:#ddd;
  box-shadow: none;
  padding: 11px 28px;
}
.wsk-cp-product .wsk-cp-text .category{
  margin-top: 0px;
}
a.buy-btn{
  border-color: #FF9800;
  background: #FF9800;
  color: #fff;
}

}

</style>
