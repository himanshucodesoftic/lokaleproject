@extends('admin.layout')
<style>
.wrapper.wrapper2{
	display: block;
}
.wrapper{
	display: none;
}
</style>
<body onload="window.print();">
<div class="wrapper wrapper2">
  <!-- Main content -->
  <section class="invoice" style="margin: 15px;">
      <!-- title row -->
      
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>Max Level</th>
                <th>Current Stock</th>
              </tr>
            </thead>
              <tbody>
              @foreach ($result['reports'] as  $key=>$report)                   
                <tr>
                    <td>{{ $report->products_id }}</td>  
                    <td>{{ $report->products_name }}</td>  
                    <td>{{ $report->max_level }}</td>    
                    <td>{{ $report->stocks }}</td>                                                                        
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <!-- /.row -->


    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
