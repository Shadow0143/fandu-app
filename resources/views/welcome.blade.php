@extends('layouts.frontend.app')

@section('title')
<title>Fandu</title>
@endsection

@section('css')

@endsection


@section('content')

<section class="topbanner">
    <div class="container-fluid">
        <div class="wrapper01">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1  order-sm-12 order-12">
                    <div class="leftsidebar45">

                        @foreach ($posts as $key=>$val)
                        <div class="topleft01">

                            <div class="light_gallery  @if(count($val->image) == 2) gitem2 @elseif(count($val->image) == 3) gitem3 @elseif(count($val->image) == 4) gitem4   @elseif(count($val->image) == 5) gitem5  @endif"
                                id="lightGallery">
                                @foreach ($val->image as $key2=>$val2)
                                <figure><img src="{{asset('post_images')}}/{{$val2->image}}" alt="topimage"></figure>
                                @endforeach

                            </div>
                            <div class="topleftinfo45">
                                {{-- <div class="tlinfotop44">
                                    <span>EXPERIENCE DESIGN</span>
                                    <span>TECHNOLOGY</span>
                                </div> --}}
                                <h2>{{$val->title}}</h2>

                                <span class="duraday55"><i
                                        class="fa fa-clock-o"></i>{{$val->created_at->diffForHumans()}}</span>
                                <p>
                                    {!! $val->post_content !!}
                                </p>

                                <a href="{{route('postDetail',['slug'=>$val->title,'id'=>$val->id])}}"
                                    class="readmore88">Read full
                                    story...</a>

                                <div class="btmtopinfo">
                                    <div class="left45">
                                        <figure></figure>
                                        <strong>by {{$val->created_by}}</strong>
                                    </div>
                                    <div class="row">

                                        @foreach ($val->tags as $tag)
                                        <div class="iconwriter col-6 ">
                                            <img src="{{asset('images/bookmark4.png')}}">{{$tag}}
                                        </div>
                                        @endforeach

                                        @foreach ($val->categories as $categories)
                                        <div class="col-6 ">
                                            <img src="{{asset('images/bookmark4.png')}}">{{$categories}}
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                        @endforeach




                        <div class="togethersec15 blogpost565">
                            <a href="#">
                                <span>
                                    check our
                                    blog posts
                                </span>
                                <figure><img src="./images/flistimg/arrow15.png"></figure>
                            </a>
                        </div>

                    </div>




                </div>

                @include('layouts.frontend.rightside')


            </div>

        </div>
    </div>

    </div>
</section>


<section>

    @if(!empty(Auth::user()))
    @if(Auth::user()->role==0)
    <button class="open-button btn btn-outline-primary" onclick="openForm()">Post</button>
    <button class="open-button btn btn-outline-warning" onclick="opentestimonialForm()">Testimonial</button>
    <button class="open-button btn btn-outline-dark" onclick="rightContentForm()">Right Content</button>
    @endif
    @endif


    <div class="modal fade pw_modal" id="postModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('createPost')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Create Post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="user_info">
                            <div class="user_info_inner">

                            </div>
                            <select class="user_post_type " name="postType" id="postType">
                                <option value="post">Post</option>
                                <option value="blog">Blog</option>
                                <option value="twitter">Twitter</option>
                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="linkedin">LinkedIn</option>
                            </select>
                        </div>


                        <div id="postEditor" name="postEditor">
                            <div class="fieldrow">
                                <input type="text" placeholder="Title" name="post_title" />
                            </div>
                            <textarea rows="4" cols="50" name="post_post" id="post_post"
                                placeholder="Describe yourself here..."></textarea>
                        </div>



                        <div id="otherEditor" name="otherEditor">
                            <textarea rows="4" cols="50" name="post" id="post"
                                placeholder="Describe yourself here..."></textarea>
                        </div>



                        <div id="blogEditor" name="blogEditor">
                            <div class="fieldrow">
                                <input type="text" placeholder="Title" name="blog_title" />
                            </div>
                            <div class="fieldrow">
                                <input type="text" placeholder="Subtitle" name="blog_subtitle" />
                            </div>
                            <textarea id="editor1" name="blog_post"></textarea>
                        </div>
                        <div class="post_options">
                            <h3>Add to Your Post</h3>
                            <div class="row">
                                <div class="col-4">

                                    <label for="tags">Select Image </label>
                                    <input type="file" name="post_image[]" id="post_image" class="form-control"
                                        multiple>

                                </div>
                                <div class="col-4">
                                    <label for="tags">Select Tags</label>
                                    <select name="tags[]" id="tags" class="select2 form-control" multiple="multiple"
                                        style="width:150px">
                                        <option value="entertainment">Entertainment</option>
                                        <option value="art">Art</option>
                                        <option value="hobbies">Hobbies</option>
                                        <option value="self care">Self Care</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="categories">Select Categories</label>
                                    <select name="categories[]" id="categories" class="select2 form-control"
                                        multiple="multiple" style="width:150px">
                                        <option value="entertainment">Entertainment</option>
                                        <option value="art">Art</option>
                                        <option value="hobbies">Hobbies</option>
                                        <option value="self care">Self Care</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="gallery uploaded_img">
                            </div>
                            <div class="col-4 text-left" style="display: none" id="imageremovebtn">
                                <a href="javaScript:void(0);" class="btn btn-outline-danger btn-sm"
                                    onclick="removeImage()">Remove Image</a>
                            </div>
                        </div>

                    </div>
                    <div class="publish_post text-center mb-3 mt-2">
                        <button class="publish_post btn btn-outline-primary ">Publish</button>
                    </div>


                </form>
            </div>
        </div>
    </div>




    <div class="modal fade pw_modal" id="testimonialmodal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('submitTestimonial')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Testimonial</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">





                        <div id="blogEditor" name="blogEditor">
                            <div class="fieldrow">
                                <label for="name">Auther Name</label>
                                <input type="text" placeholder="Auther Name" name="auther_name" required />
                            </div>
                            <div class="fieldrow">
                                <label for="desgnation">Auther Designation </label>
                                <input type="text" placeholder="Designation" name="auther_designation" required />
                            </div>
                            <textarea id="editor2" name="user_quests" required></textarea>
                        </div>
                        <div class="Image_section">

                            <div class="row">
                                <div class="col-4">

                                    <label for="tags">Auther Inage</label>
                                    <input type="file" name="auther_image" id="auther_image" class="form-control"
                                        required>

                                </div>

                            </div>


                        </div>


                    </div>
                    <div class="publish_post text-center mb-3 mt-2">
                        <button class="publish_post btn btn-outline-primary ">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>




    <div class="modal fade pw_modal" id="rightContentForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('submitContents')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Create Contents</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div id="" name="">
                            <div class="fieldrow">
                                <select name="type" id="type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="feature">Features</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="fieldrow">
                                <input type="text" placeholder="Title" name="title" class="form-control" required
                                    required />
                            </div>
                            <div class="fieldrow">
                                <input type="text" placeholder="Subtitle" name="subtitle" class="form-control" />
                            </div>
                            <textarea id="editor3" name="description" class="form-control" required></textarea>
                        </div>



                    </div>
                    <div class="publish_post text-center mb-3 mt-2">
                        <button class="publish_post btn btn-outline-primary ">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>


</section>

@endsection


@section('script')
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>


<script>
    function openForm(){
        $('#postModal').modal('show');
    }
</script>

<script>
    $(document).ready(function() {
        $('#otherEditor').hide();
            $('#blogEditor').hide();
    });

    $('#postType').on('change',function(){
        var postType = $('#postType').val();
        if(postType == 'post'){
            $('#postEditor').show();
            $('#otherEditor').hide();
            $('#blogEditor').hide();
        }
        if(postType == 'blog'){
            $('#blogEditor').show();
            $('#otherEditor').hide();
            $('#postEditor').hide();
        }
        if(postType == 'twitter' || postType == 'facebook' || postType == 'instagram' || postType == 'linkedin'){
            $('#postEditor').hide();
            $('#blogEditor').hide();
            $('#otherEditor').show();
        }
    });


    function opentestimonialForm(){
        $('#testimonialmodal').modal('show');
    }

    function rightContentForm(){
        $('#rightContentForm').modal('show');
    }
</script>

@endsection