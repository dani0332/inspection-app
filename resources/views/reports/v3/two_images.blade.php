<style>
    .bk_border{ border: 1px solid;}
    .re_border{ border: 1px solid red;}
    .gr_border{ border: 1px solid darkgreen;}
    .bl_border{ border: 1px solid darkblue;}
    .ye_border{ border: 1px solid darkgoldenrod;}

    .bk_bg{ background-color: #777777;}
    .re_bg{ background-color: red;}
    .gr_bg{ background-color: darkgreen;}
    .bl_bg{ background-color: darkblue;}
    .ye_bg{ background-color: darkgoldenrod;}

    table {
    }

    .image_row td{
        /*padding: 10px 0px;*/
    }
    .image_row td.serial{
        width: 6%;
        text-align: right;
        vertical-align: top;
        /*font-size: 15px;*/
        text-align: center;
    }

    .image_row td.thumbnail{
        width: 50%;
        background-color: #f4f4f5;
        text-align: center;
    }

    .image_row td.details{
        padding-left: 20px;

    }

    td.details table { border-collapse: collapse;}
    td.details table td{
        padding: 4px 2px;
        color: #2e302f;
        font-size: 12px;
        /*border: 1px solid rgb(255, 0, 0);*/
    }

    td.details table td.label{
        font-weight: bold;
        text-align: left;
    }

    /*p.project_name, p.project_date, p.project_inspector,*/
    /*p.project_claim_num, p.project_qty,p.project_tags,*/
    /*p.project_note, p.project_area {*/
    /*    padding-bottom: 10px;*/
    /*}*/

    p.project_note {
        width: 20%;
        font-weight: bold;
    }

    div.thumb_image_container {
        text-align: center;
    }
    img.thumb_image{
        max-height: 350px;
        width: 49.5%;
    }
    /*.page3-tbody-data > p {*/
    /*    text-align: right;*/
    /*    margin-right: 4rem;*/
    /*    font-size: 18px;*/
    /*    color: rgb(73,73,75);*/

    /*}*/
    /*.page3-footer-heading > p {*/
    /*    color: rgb(88,90,90);*/
    /*    font-size: 3rem;*/
    /*    font-weight: bold;*/
    /*    margin: 5rem 0 1rem 2rem;*/
    /*}*/
    hr {
        margin: 0 auto;
        border-top: 5px solid rgb(176,210,76);
        width: 96%;
        margin-left: 2rem;
        margin-top: 1rem;
    }

</style>
@php
//dd($projectMedia);
//dd(url("/image/report/card-1.png"))
@endphp
<table
         class=""
        style="width: 100%; border-collapse: collapse;">
    <tbody>


    @php
        $projectMedia = $projectMedia->groupBy('target.type');
        $type = [
            1=> 'Required Photos',
            2=> 'Inspection Areas',
            3=> 'Additional Photos',
        ];
    @endphp

    @foreach($projectMedia AS $typeKey => $media)

        <tr >
            <td class="" style="color: #ffffff;
                    background-color: #2e302f;
                    font-size: 12px;
                    font-weight: bold;
                    text-align: left;
                    padding: 8px 0px 8px 10px;
                    text-transform: uppercase;
                " colspan="3">

                {{$type[$typeKey]}}
            </td>
        </tr>
        @foreach($media AS $mediaKey => $mediaItem)
            @php
    //
                //dd($projectMedia->groupBy('target.type')->toJson());

            $tags = collect($mediaItem['tags'])->sortBy('id');
            $tagsImploded = $tags->implode('name',', ');
            $qtyImploded = $tags->implode('qty',', ');

            /*$str_length=3;
            $serial = $mediaKey+1;
            // Left padding if number < $str_length
            $serial = substr("000{$serial}", -$str_length);*/
            @endphp

        <tr><td style="height: 10px;"></td></tr>
        <tr class="image_row">
            <td class="serial" style="padding: 0;" >
                <table style="border-collapse: collapse;width: 100%;">
                    <tr>
                        <td style="padding: 8px 7px; background-color: #2e302f; color:white; font-weight: bold;">
                            <p>{{$mediaKey+1}}</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="thumbnail" style="">
                <div class="thumb_image_container">
                    <img class="thumb_image"
    {{--                     src="{{url("/uploads/media/9:16+aspect+ratio-white.png")}}"--}}
    {{--                     src="{{url("/uploads/media/16:9+aspect+ratio-white.png")}}"--}}
                         src="{{$mediaItem->image_url}}"
                         alt=""
                         style=""
                    />
                </div>
            </td>
            <td class="details">
{{--                <p class="project_name" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                    Project Name: <span style="color: #000">{{$project['name']}}</span>--}}
{{--                </p>--}}
{{--                <p class="project_date" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                    Date: <span style="color: #000">{{\Carbon\Carbon::parse($project['inspection_date'])->format('m/d/Y') }}</span>--}}
{{--                </p>--}}
{{--                <p class="project_claim_num" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                    Claim: <span style="color: #000">{{$project['claim_num']}}</span>--}}
{{--                </p>--}}
{{--                <p class="project_inspector" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                    Inspector: <span style="color: #000">{{$project['assigned_user']['first_name']." ".$project['assigned_user']['last_name']}}</span>--}}
{{--                </p>--}}

                <table>
                    <tr>
                        <td class="label"> Photo Area:</td><td>{{$mediaItem->target->name}}</td>
                    </tr>
                    @if(in_array($mediaItem->target->type,[2]))
                    <tr>
                        <td class="label"> Photo Tag: </td><td>{{$tagsImploded}}</td>
                    </tr>
                    <tr>
                        <td class="label">Quantity:</td><td>{{$qtyImploded}}</td>
                    </tr>
                    @endif
                    <tr>
                        <td class="label"
                        >Annotation:</td><td>{{$mediaItem->note}}</td>
                    </tr>

                </table>
{{--                <p class="project_area" style=" margin: 0; margin-top: 20px; color: #2e302f; padding-bottom: 200px; "--}}
{{--                >--}}
{{--                   --}}
{{--                    <span style="color: #000; padding-bottom: 10px" >--}}
{{--                         </span>--}}
{{--                </p>--}}
{{--                <p class="project_tags" style="margin: 0 0 5px 0; color: #2e302f; padding-bottom: 10px">--}}
{{--                   <span style="color: #000"></span>--}}
{{--                </p>--}}

{{--                <p class="project_qty" style="margin: 5px 0; color: #2e302f; padding-bottom: 10px">--}}
{{--                     <span style="color: #000"></span>--}}
{{--                </p>--}}

{{--                <p class="project_note" style="margin: 0; color: #00000094">--}}
{{--                    <span style="color: #000"></span>--}}
{{--                </p>--}}
            </td>
        </tr>
        <tr><td style="height: 10px;"></td></tr>

        @endforeach
    @endforeach
{{--    <tr class="image_row">--}}
{{--        <td class="serial"><p>01</p> </td>--}}
{{--        <td class="thumbnail" style="">--}}
{{--            <div class="thumb_image_container">--}}
{{--                <img class="thumb_image"--}}
{{--                     src="{{url("/uploads/media/9:16+aspect+ratio-white.png")}}"--}}
{{--    --}}{{--                    src="{{url("/uploads/media/16:9+aspect+ratio-white.png")}}"--}}
{{--                        alt=""--}}
{{--                        style=""--}}
{{--                />--}}
{{--            </div>--}}
{{--        </td>--}}
{{--        <td class="details">--}}
{{--            <p class="project_name" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Project Name: <span style="color: #000">Project Abc</span>--}}
{{--            </p>--}}
{{--            <p class="project_date" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Date: <span style="color: #000">11/7/2024, 10:45pm</span>--}}
{{--            </p>--}}
{{--            <p class="project_claim_num" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Claim: <span style="color: #000">455087</span>--}}
{{--            </p>--}}
{{--            <p class="project_inspector" style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Inspector: <span style="color: #000">Janson Marshall</span>--}}
{{--            </p>--}}

{{--            <p class="project_area" style=" margin: 0; margin-top: 20px; color: #00000094; padding-bottom: 5px; "--}}
{{--            >--}}
{{--                Photo Area:--}}
{{--                <span style="color: #000; padding-bottom: 5px"--}}
{{--                >Front Elevation--}}
{{--							</span>--}}
{{--            </p>--}}
{{--            <p class="project_tags" style="margin: 0 0 5px 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Photo Tag: <span style="color: #000">Tag 3</span>--}}
{{--            </p>--}}

{{--            <p class="project_qty" style="margin: 5px 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Qty: <span style="color: #000">15</span>--}}
{{--            </p>--}}

{{--            <p class="project_note" style="margin: 0; color: #00000094">Annotation:--}}
{{--                <span style="color: #000">This is location needs slight repair. This is location needs slight repair</span>--}}
{{--            </p>--}}

{{--        </td>--}}
{{--    </tr>--}}

{{--    <tr class="image_row">--}}
{{--        <td class="serial"><p>01</p> </td>--}}
{{--        <td class="thumbnail" style="">--}}
{{--            <img class="thumb_image"--}}
{{--                 src="{{url("/uploads/media/9:16+aspect+ratio-white.png")}}"--}}
{{--                    src="{{url("/uploads/media/16:9+aspect+ratio-white.png")}}"--}}
{{--                    alt=""--}}
{{--                    style=""--}}
{{--            />--}}
{{--        </td>--}}
{{--        <td class="details">--}}
{{--            <p style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Project Name: <span style="color: #000">Project Abc</span>--}}
{{--            </p>--}}
{{--            <p style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Date: <span style="color: #000">11/7/2024, 10:45pm</span>--}}
{{--            </p>--}}
{{--            <p style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Claim: <span style="color: #000">455087</span>--}}
{{--            </p>--}}
{{--            <p style="margin: 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Inspector: <span style="color: #000">Janson Marshall</span>--}}
{{--            </p>--}}

{{--            <p--}}
{{--                    style="--}}
{{--								margin: 0;--}}
{{--								margin-top: 20px;--}}
{{--								color: #00000094;--}}
{{--								padding-bottom: 5px;--}}
{{--							"--}}
{{--            >--}}
{{--                Photo Area:--}}
{{--                <span style="color: #000; padding-bottom: 5px"--}}
{{--                >Front Elevation--}}
{{--							</span>--}}
{{--            </p>--}}
{{--            <p style="margin: 0 0 5px 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Photo Tag: <span style="color: #000">Tag 3</span>--}}
{{--            </p>--}}

{{--            <p style="margin: 5px 0; color: #00000094; padding-bottom: 5px">--}}
{{--                Qty: <span style="color: #000">15</span>--}}
{{--            </p>--}}

{{--            <p style="margin: 0; color: #00000094">Annotation:</p>--}}
{{--            <span style="color: #000"--}}
{{--            >This is location needs slight repair</span--}}
{{--            >--}}
{{--        </td>--}}
{{--    </tr>--}}
    </tbody>
</table>

{{--<!--To be removed hide on Feb-2024 -->--}}
{{--<table class="images" style="padding-top: 2rem; display: none;">--}}
{{--    <tbody>--}}
{{--    @php--}}
{{--        $mediaCount = 1;--}}
{{--        $subMediaCount = 1;--}}
{{--    @endphp--}}
{{--    @foreach($category AS $catKey => $catItem)--}}

{{--        @if(!empty($catItem['media']))--}}
{{--            @foreach($catItem['media'] AS $mediaKey => $mediaItem)--}}
{{--                --}}{{----}}{{--@if( (2 % 2) > 0 )--}}
{{--                @if( ($mediaCount % 2) > 0 )--}}
{{--                    --}}{{----}}{{--If odd open TR--}}
{{--                    <tr>--}}
{{--                        @endif--}}

{{--                        <td class="page3-tbody-data" >--}}

{{--                            <img data-url="{{ config('constants.MEDIA_IMAGE_PATH').$mediaItem['image_url']  }}"--}}
{{--                                 data-id="{{$mediaItem['id']}}" src="{{ $mediaItem['image_url']  }}"--}}
{{--                               --}}
{{--                                 />--}}
{{--                            <p>Photo: {{($mediaKey+1). ' of '.$catItem['media_count']}}</p>--}}
{{--                        </td>--}}

{{--                        @if( ($mediaCount % 2) <= 0 )--}}
{{--                            --}}{{----}}{{--If odd open TR--}}
{{--                    </tr>--}}
{{--                @endif--}}

{{--                @php--}}
{{--                    $mediaCount++;--}}
{{--                @endphp--}}

{{--            @endforeach --}}{{----}}{{--Media Loop End--}}
{{--        @endif --}}{{----}}{{--IF Media Exists End--}}

{{--        @if(!empty($catItem['get_child']))--}}

{{--            @foreach($catItem['get_child'] AS $subCatKey => $subCatItem)--}}

{{--                @if(!empty($subCatItem['media']))--}}
{{--                    @foreach($subCatItem['media'] AS $mediaKey => $mediaItem)--}}
{{--                        --}}{{----}}{{--@if( (2 % 2) > 0 )--}}
{{--                        @if( ($subMediaCount % 2) > 0 )--}}
{{--                            --}}{{----}}{{--If odd open TR--}}
{{--                            <tr>--}}
{{--                                @endif--}}

{{--                                --}}{{----}}{{--Image Cell--}}
{{--                                <td class="page3-tbody-data" >--}}
{{--                                    <p>{{$catItem['category_name']}}</p>--}}
{{--                                    <img class="media"--}}
{{--                                     --}}
{{--                                         data-url="{{ config('constants.MEDIA_IMAGE_PATH').$mediaItem['image_url']  }}"--}}
{{--                                         data-id="{{$mediaItem['id']}}" src="{{ $mediaItem['image_url']  }}" />--}}

{{--                                    <p>Photo: {{($mediaKey+1). ' of '.$subCatItem['media_count']}}</p>--}}
{{--                                </td>--}}

{{--                                @if( ($subMediaCount % 2) <= 0 )--}}
{{--                                    --}}{{----}}{{--If odd open TR--}}
{{--                            </tr>--}}
{{--                        @endif--}}
{{--                        @php--}}
{{--                            $subMediaCount++;--}}
{{--                        @endphp--}}

{{--                    @endforeach --}}{{----}}{{-- Sub Media Loop End--}}
{{--                @endif --}}{{----}}{{--IF Sub Media Exists End--}}

{{--            @endforeach --}}{{----}}{{--Sub Cat Loop End--}}
{{--        @endif --}}{{----}}{{--If Sub cat exists end--}}

{{--    @endforeach --}}{{----}}{{--Main Cat Loop End--}}


{{--        <td class="page3-tbody-data">--}}
{{--            <img src="{{asset('assets/images/pdf-03-img.png')}}" alt="body-image" >--}}
{{--            <p>Photo 2 of 4</p>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--                    --}}
{{--                    --}}
{{--                    --}}
{{--    <tr>--}}
{{--        <td class="page3-tbody-data">--}}
{{--            <img src="{{asset('assets/images/pdf-03-img.png')}}" alt="body-image" >--}}
{{--            <p>Photo 3 of 4</p>--}}
{{--        </td>--}}
{{--        <td class="page3-tbody-data">--}}
{{--            <img src="{{asset('assets/images/pdf-03-img.png')}}" alt="body-image" >--}}
{{--            <p>Photo 4 of 4</p>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}

