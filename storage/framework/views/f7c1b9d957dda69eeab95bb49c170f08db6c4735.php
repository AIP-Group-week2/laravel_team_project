<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

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


    <div class="gallery">
        <a target="_blank" href="./images/86698.jpg">
            <img src="./images/86698.jpg" alt="Forest" width="600" height="600">
        </a>
    </div>




    <div class="container">
      <h1>Movie recommendations</h1>
      <br/>
      <div class="form-group">
      <?php echo e(Form::open(array('url' => 'movieresult','files'=>true))); ?>


      <?php echo e(Form::label('movietitle', 'movie title')); ?>

      <?php echo e(Form::text('movietitle')); ?>

      <br/><br/>
      <?php echo e(Form::label('date', 'Release Date')); ?>

      <?php echo e(Form::text('date')); ?><br/><br/>
      <?php echo e(Form::label('duration', 'Duration')); ?>

      <?php echo e(Form::text('duration')); ?><br/><br/>


      <?php echo e(Form::label('type','movie type')); ?>

      <?php echo e(Form::select('type',array(
        'action' => 'Action',
        'comedy' => 'Comedy',
        'crime' => 'Crime',
        'horror' => 'Horror',
        'drama' => 'Drama',
        'adventure' => 'Adventure',
        'war' => 'War',
        'others' => 'Other'
      ))); ?>

      <br/><br/>

      <?php echo e(Form::label('comment','Synopsis')); ?>

      <?php echo e(Form::textarea('comment', '', array('placeholder' =>'Why are you suggesting this movie?'))); ?>

<br/><br/>
      <?php echo e(Form::checkbox('agree','yes',false)); ?>



      <?php echo e(Form::label('agree','I agree to the terms of the service.')); ?><br/><br/>
      </div>
      <?php echo e(Form::submit('Submit')); ?>

      <?php echo e(Form::close()); ?>

      </div>


    </body>
</html>
