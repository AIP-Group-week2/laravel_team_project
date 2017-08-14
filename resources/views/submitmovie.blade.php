<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <style type="text/css">
        body, html{height: 100%;}
        body{
            display: flex;
            justify-content:center;
            align-items:center;
        }
        input[type=text]:focus {
            border: 3px solid #555;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }
        select {
            width: 100%;
            padding: 16px 20px;
            border: none;
            border-radius: 4px;
            background-color: #f1f1f1;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 300px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }


    </style>

</head>


    <body>

@if(count($errors))
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <br/>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif



    <div class="gallery">
        <a target="_blank" href="./images/86698.jpg">
            <img src="./images/86698.jpg" alt="Forest" width="600" height="600">
        </a>
    </div>

<div class="row">
      <div class="col-md-6">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
          <label for="movietitle">First Name:</label>
          <input type="text" id="movietitle" name="movietitle" class="form-control" placeholder="Enter movietitle" value="{{ old('movietitle') }}">
          <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
      </div>
      </div>


    <div class="container">
      <h1>Movie recommendations</h1>
      <br/>
      <div class="form-group">
      {{ Form::open(array('url' => 'movieresult','files'=>true)) }}

      {{ Form::label('movietitle', 'movie title') }}
      {{ Form::text('movietitle'),array('required') }}
      <br/><br/>
      {{ Form::label('date', 'Release Date') }}
      {{ Form::text('date') }}<br/><br/>
      {{ Form::label('duration', 'Duration') }}
      {{ Form::text('duration') }}<br/><br/>


      {{ Form::label('type','movie type')}}
      {{ Form::select('type',array(
        'action' => 'Action',
        'comedy' => 'Comedy',
        'crime' => 'Crime',
        'horror' => 'Horror',
        'drama' => 'Drama',
        'adventure' => 'Adventure',
        'war' => 'War',
        'others' => 'Other'
      ))}}
      <br/><br/>

      {{ Form::label('comment','Synopsis')}}
      {{ Form::textarea('comment', '', array('placeholder' =>'Why are you suggesting this movie?'))}}
<br/><br/>
      {{ Form::checkbox('agree','yes',false)}}


      {{ Form::label('agree','I agree to the terms of the service.')}}<br/><br/>
      </div>
      {{Form::submit('Submit')}}
      {{ Form::close()}}
      </div>


    </body>
</html>
