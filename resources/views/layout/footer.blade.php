
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0B
    </div>
    <strong>Copyright &copy;2019 <a href="#">MIC Enterprice</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<nav id="context-menu" class="context-menu">
    <ul class="context-menu__items">
      <li class="context-menu__item">
        <a href="#" class="context-menu__link" data-action="MoveTo"><i class="fa fa-eye"></i> Move To</a>
      </li>
      
      <li class="context-menu__item">
        <a href="#" class="context-menu__link" data-action="Edit"><i class="fa fa-edit"></i> Edit Task</a>
      </li>
      <li class="context-menu__item">
        <a href="#" class="context-menu__link" data-action="Delete"><i class="fa fa-trash"></i> Delete Task</a>
      </li>
    </ul>
  </nav>

<!-- jQuery -->
<script src="{{('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{('asset/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Dashboard App -->
<script src="{{('asset/js/tamplate.min.js')}}"></script>
<!-- Dashboard Custom-->
<script src="{{('asset/js/dashboard-layout.js')}}"></script>
<script src="{{('asset/js/script.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#DataFile").DataTable();   
  });
</script>
</body>
</html>
