<?php
  $hour = \Carbon\Carbon::now()->hour;
  $targetHour = substr($item->start_time, 11, 2);
?>
@if ( $hour >= $targetHour)
<li class="mui-table-view-cell lbd-info">
  <a href="{{ $item->click_url }}">
    <div class="mui-row lbd-box">
      <div class="mui-col-xs-4 lbd-img">
        <img src="{{ $item->pic_url }}"/>
      </div>
      <div class="mui-col-xs-8 lbd-more">
        <div class="lbd-top">
          <h4 class="lbd-name">{{ $item->title }}</h4>
        </div>
      </div>
      <div class="mui-col-xs-8 lbd-bottom">
        <div class="mui-pull-left">
          <p>
            <span class="lbd-m">￥</span><span class="lbd-price-now">{{ $item->reserve_price }}</span>
            <span class="lbd-price-ori">￥{{ $item->zk_final_price }}</span>
          </p>
          <div class="lbd-tip">疯抢进行中</div>
        </div>
        <div class="mui-pull-right">
          <div class="mui-text-center lbd-take">马上抢 ></div>
          <div class="mui-pull-right lbd-mount">{{ $item->total_amount }}件已抢</div>
        </div>
      </div>
    </div>
  </a>
</li>
@else
<li class="mui-table-view-cell lbd-info">
  <a href="{{ $item->click_url }}">
    <div class="mui-row lbd-box">
      <div class="mui-col-xs-4 lbd-img">
        <img src="{{ $item->pic_url }}"/>
      </div>
      <div class="mui-col-xs-8 lbd-more">
        <div class="lbd-top">
          <h4 class="lbd-name">{{ $item->title }}</h4>
        </div>
      </div>
      <div class="mui-col-xs-8 lbd-bottom">
        <div class="mui-pull-left lbd-bottom-box">
          <p class="mui-text-right">
            <span class="lbd-m">￥</span><span class="lbd-price-now">{{ $item->reserve_price }}</span>
            <span class="lbd-price-ori">￥{{ $item->zk_final_price }}</span>
          </p>
          <div class="lbd-tip-no">{{$targetHour}}:00准时开抢</div>
        </div>
      </div>
    </div>
  </a>
</li>
@endif