<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" ng-app="adminApp"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <div class="admin-wrapper">
        <nav class="adminmenu-wrapper" role="navigation">
          <ul class="adminmenu">
            <li><a href=""><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
            <li><a data-toggle="collapse" href="#postcollapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-pushpin"></span>Post</a>
              <div class="collapse" id="postcollapse">
                <ul class="submenu">
                  <li><a href="">Edit</a></li>
                  <li><a href="">Add New</a></li>
                  <li><a href="">Post Tags</a></li>
                  <li><a href="">Categories</a></li>
                </ul>
              </div>   
            </li>
            <li>
              <a data-toggle="collapse" href="#monthly-collapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-calendar"></span>Monthly Special</a>
              <div class="collapse" id="monthly-collapse">
                <ul class="submenu">
                  <li><a href="">Edit</a></li>
                  <li><a href="">Media</a></li>
                  <li><a href="">Links</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a data-toggle="collapse" href="#page-collapse" aria-expanded="true" aria-controls="collapseExample"><span class="glyphicon glyphicon-file"></span>Pages</a>
              <div class="collapse in" id="page-collapse">
                <ul class="submenu">
                  <li><a href=""  class="current" >Edit</a></li>
                  <li><a href="">Add New</a></li>
                </ul>
              </div>
            </li>
            <li><a href=""><i class="fa fa-comments"></i>Comments</a></li>
            <li><a href=""><i class="fa fa-paint-brush"></i>Appearance</a></li>
            <li><a href=""><i class="fa fa-cogs"></i>Plugins</a></li>
            <li><a href=""><i class="fa fa-user"></i>Users</a></li>
            <li><a href=""><i class="fa fa-wrench"></i>Tools</a></li>
            <li><a href=""><i class="fa fa-sliders"></i>Settings</a></li>
            <li><a href=""><span class="glyphicon glyphicon-pushpin"></span>Header</a></li>
            <li><a href=""><span class="glyphicon glyphicon-pushpin"></span>Flutter</a></li> 
          </ul>  
        </nav>
        
        <div id="admin-content">
            <div id="wrap">
                <h1>Edit Page</h1> 
                <form action="" method="post">
                  <div class="col-md-9 pdl">
                    <div class="entry-content">
                      <div class="entry-title">
                        <input type="text" class="form-control" id="page-title" placeholder="Enter page title"> 
                        <a href="" class="btn">View Page</a>
                      </div><!--entry title-->

                      <div class="content-editor">
                          <div class="editor-controls">
                             <a href="">Upload / Insert</a>
                          </div>
                          <div class="editor-toolbar">
                            <div class="editor-body">
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-bold"></i></button>
                              </div> 
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-italic"></i></button>
                              </div> 
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-underline"></i></button>
                              </div> 
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-align-left"></i></button>
                              </div>
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-align-center"></i></button>
                              </div> 
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-align-right"></i></button>
                              </div>
                              <div class="editor-btn" role="button" area-label="Bold">
                                <select id="font-family">
                                   <option>Font</option>
                                   <option>Times New Roman</option>
                                   <option>Helvetica</option>
                                   <option>Open Sans</option>
                                   <option>Sans serif</option>
                                   <option>Arial</option>
                                   <option>Nueue</option>
                                </select>
                              </div>
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <span class="text-strike">ABC</span></button>
                              </div>
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-mail-forward"></i></button>
                              </div>
                              <div class="editor-btn" role="button" area-label="Bold">
                                <button role="presentation" type="button" tabindex="-1">
                                  <i class="fa fa-mail-reply"></i></button>
                              </div>
                            </div>
                          </div><!--editor toolbar-->
                          <textarea class="form-control" rows="15"></textarea>
                      </div><!--content editor-->

                      <div class="post-box">
                          <h3>Custom Fields</h3>
                          <div class="entry-content">
                              <table id="list-table" style="">
                                <thead>
                                  <tr>
                                    <th class="left">Name</th>
                                    <th>Value</th>
                                  </tr>
                                </thead>
                              </table>
                              <p><strong>Add New Custom Field:</strong></p>

                              <table id="newmeta">
                                <thead>
                                  <tr>
                                    <th class="left"><label for="metakeyselect">Name</label></th>
                                    <th><label for="metavalue">Value</label></th>
                                  </tr>
                                </thead>

                                <tbody>
                                <tr>
                                  <td id="newmetaleft" class="left">
                                  <select id="metakeyselect" name="metakeyselect">
                                    <option value="#NONE#">— Select —</option
                                    <option value="position">position</option>
                                    <option value="rule">rule</option>
                                  </select>
                                  <a href=""><span id="enternew">Enter new</span></a>
                                  <span id="cancelnew" class="hidden">Cancel</span></a>
                                  </td>
                                  <td><textarea id="metavalue" name="metavalue" rows="5"></textarea></td>
                                  </tr>

                                  <tr><td colspan="2">
                                  <div class="submit">
                                    <input type="submit" id="newmeta-submit" class="btn btn-default" value="Add Custom Field"></div></td></tr>
                                  </tbody>
                              </table>
                          </div>  
                      </div>
                    </div><!--entry content-->
                  </div><!--col 8-->
                  <div class="col-md-3">
                    <aside class="entry-right">
                        <div id="postbox-container1" class="post-box">
                          <h3>Publish</h3>
                          <div class="entry-content">
                              <a href="" class="btn btn-default pull-right">Preview changes</a>
                              <div class="clearfix"></div>
                               <div class="pub-section">
                                  <label>Status:</label>
                                  <span class="post-status">
                                    Published 
                                  </span>
                                  <a href="">Edit</a>
                               </div>
                               <div class="pub-section">
                                  <label>Visiblity:</label>
                                  <span class="post-status">
                                    Public 
                                  </span>
                                  <a href="">Edit</a>
                               </div> 
                          </div>

                              <div class="publish-action">
                                <a href="" class="submitdelete">Move to trash</a>
                                <input type="submit" name="publish" id="publish" class="btn btn-info btn-small pull-right" value="Publish">
                              </div>
                        </div>

                        <div class="post-box">
                          <h3>Attribute</h3>
                          <div class="entry-content">
                             <p><strong>Parent</strong></p>
                             <select>
                               <option>No Parent</option>
                               <option>Parent one</option>
                               <option>Parent two</option>
                             </select>
                              <p><strong>Template</strong></p>
                               <select>
                                 <option>Homepage template</option>
                                 <option>Template one</option>
                                 <option>Template two</option>
                               </select>
                              <p><strong>Order</strong></p>
                               <select>
                                 <option>Alphabetically</option>
                               </select>
                               <p></p>
                          </div>
                        </div>    
                    </aside><!--entry right-->
                  </div>
                </form>
            </div>
        </div><!--admin content-->
      </div>  <!--admin wrapper-->
      <div class="container" ng-view>
        
      </div>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.js') }}"></script>
        <script src="{{ URL::asset('js/admin/app.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/ServicePageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/ServiceController.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/GalleryService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/ImageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/GalleryController.js') }}"></script>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
