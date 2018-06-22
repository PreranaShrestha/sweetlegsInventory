<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <div id="content" class="span10">
            
            
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Tables</a></li>
            </ul>

            <div class="row-fluid sortable">        
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                          <thead>
                              <tr>
                                  <th>Username</th>
                                  <th>Date registered</th>
                                  <th>Role</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>   
                          <tbody>
                            <tr>
                                <td>Anton Phunihel</td>
                                <td class="center">2012/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>  
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alphonse Ivo</td>
                                <td class="center">2012/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>  
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Thancmar Theophanes</td>
                                <td class="center">2012/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>  
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td>Walerian Khwaja</td>
                                <td class="center">2012/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Clemens Janko</td>
                                <td class="center">2012/02/01</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Chidubem Gottlob</td>
                                <td class="center">2012/02/01</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hristofor Sergio</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tadhg Griogair</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pollux Beaumont</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Adam Alister</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Carlito Roffe</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sana Amrin</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Adinah Ralph</td>
                                <td class="center">2012/06/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dederick Mihail</td>
                                <td class="center">2012/06/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hipólito András</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fricis Arieh</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Scottie Maximilian</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bao Gaspar</td>
                                <td class="center">2012/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tullio Luka</td>
                                <td class="center">2012/02/01</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Felice Arseniy</td>
                                <td class="center">2012/02/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Finlay Alf</td>
                                <td class="center">2012/02/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Theophilus Nala</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sullivan Robert</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kristóf Filiberto</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kuzma Edvard</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bünyamin Kasper</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Crofton Arran</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bernhard Shelah</td>
                                <td class="center">2012/06/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Grahame Miodrag</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Innokentiy Celio</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kostandin Warinhari</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 

                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ajith Hristijan</td>
                                <td class="center">2012/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>
                            </tr>
                          </tbody>
                      </table>            
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->

            <div class="row-fluid sortable">
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Simple Table</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>                                          
                                  </tr>
                              </thead>   
                              <tbody>
                                <tr>
                                    <td>Samppa Nori</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Estavan Lykos</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Chetan Mohamed</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Derick Maximinus</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Friderik Dávid</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                              </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                    </div>
                </div><!--/span-->
                
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Striped Table</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>                                          
                                  </tr>
                              </thead>   
                              <tbody>
                                <tr>
                                    <td>Yiorgos Avraamu</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Avram Tarasios</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Quintin Ed</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Enéas Kwadwo</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Agapetus Tadeáš</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                              </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            
            <div class="row-fluid sortable">    
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Bordered Table</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>                                          
                                  </tr>
                              </thead>   
                              <tbody>
                                <tr>
                                    <td>Pompeius René</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Paĉjo Jadon</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Micheal Mercurius</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Ganesha Dubhghall</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Hiroto Šimun</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                              </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                    </div>
                </div><!--/span-->
                
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Condensed Table</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-condensed">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>                                          
                                  </tr>
                              </thead>   
                              <tbody>
                                <tr>
                                    <td>Carwyn Fachtna</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Nehemiah Tatius</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Ebbe Gemariah</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Eustorgios Amulius</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Leopold Gáspár</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                              </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->
            
            <div class="row-fluid sortable">    
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Combined All Table</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>                                          
                                  </tr>
                              </thead>   
                              <tbody>
                                <tr>
                                    <td>Vishnu Serghei</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Zbyněk Phoibos</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Einar Randall</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Félix Troels</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Aulus Agmundr</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                              </tbody>
                         </table>  
                         <div class="pagination pagination-centered">
                          <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                              <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                          </ul>
                        </div>     
                    </div>
                </div><!--/span-->
            </div><!--/row-->
    

    </div><!--/.fluid-container-->
    
    </body>
</html>
