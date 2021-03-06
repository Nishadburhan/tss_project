<controller ng-controller="categoriesCtrl">
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><input type="text" name="" ui-autocomplete="autocompleteOptions" class="form-control" ng-model="search" placeholder="Search:-"></h3>
                  <div class="box-tools pull-right clearfix">
                    <!-- <button class="btn btn-info" ><i class="fa fa-plus"></i></button><br/> -->
                    <a href="#" data-toggle="modal" data-target="#myModal" ng-click="formReset()" class="btn btn-sm btn-info btn-flat">Add New Category</a>
                    <!-- <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th><i class="fa fa-level-down" aria-hidden="true"></i></th>
                        </tr>
                      </thead>
                      <tbody ng-init="lists()">
                        <tr ng-repeat="c in data | filter:search">
                          <td>{{$index + 1}}</td>
                          <td>{{c.name}}</td>
                          <td>{{c.status}}</td>
                          <td>
                            <a href="#" class="btn btn-warning" ng-click="edit(c.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;
                            <a href="#" class="btn btn-danger" ng-click="delete(c.id)" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div>

      <!-- Modal -->
      <?php $this->load->view('form');?>
</controller>