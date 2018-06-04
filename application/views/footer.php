<!-- Right Panel -->
</div>
    <script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>


    <script src="<?=base_url()?>assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/dashboard.js"></script>
    <script src="<?=base_url()?>assets/js/widgets.js"></script>
    <script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?=base_url()?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>



    <!-- FOR DATA TABLES -->


    <script src="<?=base_url()?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/js/lib/data-table/datatables-init.js"></script>

    <script src="<?=base_url()?>assets/js/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    <!-- end of datatables -->
    <script type="text/javascript">
        (function($){   
            $("#btnadd").click(function(){
                var link = document.getElementById("btnadd").name;
                $.ajax({
                    url:"<?=base_url('Api/dir/');?>"+link,  
                    method: "POST",
                    dataType : 'json',
                    data: $("#form").serialize(),success:function(response){
                        if (response['status']=="success"){
                            sweetalert("Successfully Added","success")
                        }                            
                        else if (response['status']=="exists"){
                            sweetalert("Already Exists","warning")
                        }
                        else if (response['status']=="error"){
                            sweetalert("Wrong Input","error")
                        }
                        $("#form")[0].reset();
                    }       
                })
            })
            $("#btnedit").click(function(event){
                var $id = $(event.currentTarget).parent("#form").child("#college_id").val();
                var $code = $(event.currentTarget).parent("#form").child("#college_code").text();
                var $desc = $(event.currentTarget).parent("#form").child("#college_desc").text();
                

            })
            // $("#btnmod").click(function(event){
            //     var method = $(event.currentTarget).attr('name');
            //     var form = $(event.currentTarget).parent("form").attr('id');
            //     $.ajax({
            //         url:"<?=base_url('Api/dir/');?>"+method,  
            //         type: "GET",
            //         success:function(response){
            //             if (response['status']=="success"){
            //                 sweetalert("Successfully Added","success")
            //             }                            
            //             else if (response['status']=="exists"){
            //                 sweetalert("Already Exists","warning")
            //             }
            //             else if (response['status']=="error"){
            //                 sweetalert("Wrong Input","error")
            //             }
            //             $("#form")[0].reset();
            //         }       
            //     })
            // })
            function sweetalert($response,$icon){
                swal({
                  title:$response,
                  text: "  " ,
                  icon: $icon,
                  timer: 1000,
                  buttons: false
                });
            }
        })(window.jQuery);
    </script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
