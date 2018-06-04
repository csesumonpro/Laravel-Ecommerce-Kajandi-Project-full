<div class="col-md-3">
    <div class="clearfix">
        <ul class="dropdown-menu dropdown-menu-category dropdown-menu-category-hold dropdown-menu-category-sm">
        @foreach($all_category as $category)
            <li><a href="{{url('/product-category/'.$category->id)}}"><i class="fa fa-fire-extinguisher dropdown-menu-category-icon"></i>{{$category->cat_name}}</a>
                <div class="dropdown-menu-category-section">
                    <div class="dropdown-menu-category-section-inner">
                        <div class="dropdown-menu-category-section-content">
                            <div class="row">
                                <h5 class="dropdown-menu-category-title">{{$category->cat_title}}</h5>
                                @foreach($all_sub_category as $sub_category)
                                <div class="col-md-6">
                                    {{--<h5 class="dropdown-menu-category-title">{{$category->cat_title}}</h5>--}}

                                    <ul class="dropdown-menu-category-list">
                                       @if($sub_category->cat_id==$category->id)
                                        <li><a href="{{url('/product-sub-category/'.$sub_category->id)}}">{{$sub_category->sub_cat_name}}</a>
                                            <p>{{$sub_category->sub_cat_desc}}</p>
                                        </li>
                                       @endif
                                    </ul>
                                </div>
                               @endforeach
                            </div>
                        </div>
                        <img class="dropdown-menu-category-section-theme-img" src="{{asset($category->cat_image)}}" alt="Image Alternative text" title="{{$category->cat_title}}" style="right: -10px;" />
                    </div>
                </div>
            </li>
        @endforeach
            <br><br>
        </ul>
    </div>
</div>
