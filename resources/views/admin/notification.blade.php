@extends('layouts.admin_layout.admin_layout')
@section('content')

<div class="container fluid">
     <div class="card" style="width: 68rem; margin-left: 3rem;">
         <div class="category-form" style="margin: 3rem 3rem;">

             <div class="category-from">
                            <x-alert/>
                 <form method="post" action="{{ url('admin/notifications/send')}}" enctype="multipart/form-data">
                     {{ csrf_field() }}

                     <div class="form-group">
                         <label for="title">Title</label>
                         <input type="text" class="form-control" id="title" placeholder="Titlle" name="title"></input>
                     </div>

                     <div class="form-group">
                         <label for="formGroupExampleInput1">Message</label>
                         <textarea type="text" class="form-control" id="formGroupExampleInput1" placeholder="message" name="message"></textarea>
                     </div>

			         <div class="form-group">
                         <label for="url">url</label>
                         <input type="text" class="form-control" id="url" placeholder="https://www.google.com/" name="url"></input>
                     </div>

                     <div class="form-group">
                         <label for="imageURl">Image Url</label>
                         <input type="text" class="form-control" id="imageURl" placeholder=" https://xxxxxxxx.jpg/png/" name="image_url"></input>
                     </div>


                     <div class="form-group float-right">
                         <button type="submit" class="btn btn-info">send notification</button>
                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>

@endsection

    
