<div class="container-fluid bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 box">
                <ul class="list-inline">
                    <li class="text-center line"><a href="{{ route('pc.index') }}" target="_blank" title="tm超市优惠券">首页</a></li>
                    <li class="text-center line"><a href="{{ route('pc.allGoodsCategory.index') }}" target="_self" title="优惠券商品分类">全部商品</a></li>
                    <li class="text-center line"><a href="{{ route('pc.optimusMaterial.pintuan') }}" target="_self" title="聚划算拼团主会场">聚划算拼团主会场</a></li>
                    <li class="text-center active">{{ $itemInfo->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
