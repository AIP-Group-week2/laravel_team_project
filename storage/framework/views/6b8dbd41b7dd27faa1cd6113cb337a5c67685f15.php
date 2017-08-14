<?php
/**
 * Created by PhpStorm.
 * User: Fred
 * Date: 2017/8/12
 * Time: 22:39
 */

session_start();

Session::put('title',$movietitle);
Session::put('type',$movietype);
Session::put('duration',$movieduration);
Session::put('date',$moviedate);
Session::put('comment',$moviecomment);


?>
<head>
<style>
    body, html{height: 100%;}
    body{
        display: flex;
        justify-content:center;
        align-items:center;
    }
    input[type=text]:focus {
        border: 3px solid #555;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 20px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }

</style>

</head>



<body>

<table>
    <tr>
        <th>Movie Title</th>
        <th>Release date</th>
        <th>Duration</th>
        <th>Genre</th>
        <th>Synopsis</th>
    </tr>
    <tr>
        <td><?php echo e(Session::get('title')); ?></td>
        <td><?php echo e(Session::get('date')); ?></td>
        <td><?php echo e(Session::get('duration')); ?></td>
        <td><?php echo e(Session::get('type')); ?></td>
        <td><?php echo e(Session::get('comment')); ?></td>
    </tr>

</table>


</body>
