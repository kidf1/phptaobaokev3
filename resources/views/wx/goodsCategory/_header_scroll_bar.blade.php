<!--横向滑动商品导航 开始-->
<header class="mui-bar mui-bar-nav lbd-index-nav" id="lbd-index-header">
  <div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
        <div class="mui-scroll" id="lbd-index-scroll">
            <a class="mui-control-item" title="优惠券" href="{{ route('wx.index') }}">推荐</a>
            @foreach($topGoodsCategory as $category)
            <a class="mui-control-item @if($category->id == $id) mui-active @endif " href="{{ route('goodsCategorys.categoryOne', $category->id) }}" title="{{ $category->name }}tb优惠券">{{ $category->name }}</a>
            @endforeach
        </div>
        <a rel="nofollow" class="mui-icon mui-icon-arrowdown mui-pull-right" id="lbd-mask-cate-show"></a>
   </div>
</header><!--横向滑动商品导航 结束-->
