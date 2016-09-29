<?php include ("header.php") ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">类别</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-plus"></i>Add </h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <center> <?php echo '<font color="red">'. $this->session->userdata("cerror").'</font>';  $this->session->set_userdata("cerror",'');?></center>
                    <form name="addp" method="post" action="/_admin/category_save" enctype="multipart/form-data">
                        <table class="table table-bordered" id="add">
                            <tr><td>名称：</td><td><input name="name" id="name" type="text" class="form-control"></td></tr>
                            <tr><td colspan="2" ><center><input type="submit" name="submit" value="保 存" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" class="btn btn-danger" value="重 置"> </center></td></tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-list"></i> List</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-bordered table-striped responsive" id="products_list" name="products_list">
                        <thead><tr><td>ID</td><td>名称</td><td>操作</td></tr></thead>
                        <tbody><?php
                        foreach ($categories->result_array() as $row){
                            ?>
                            <tr id="c<?php echo $row['id']; ?>"><td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><a onclick="category_edit(<?php echo $row['id']; ?>,'<?php echo $row['name']; ?>');">编辑</a>&nbsp;&nbsp;<a onclick="category_delete(<?php echo $row['id']; ?>)">删除</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
    </div><!--/fluid-row-->
    <hr>
    <div class="modal fade" id="editc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Edit</h3>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="edit">
                        <input name="idc" id="idc" type="hidden">
                        <tr><td>名称：</td><td><input name="namec" id="namec" type="text" class="form-control"></td></tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal" onclick="category_save();">Save changes</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready( function() {
            $('#products_list').DataTable({
                "iDisplayLength" : 15,
                "sPaginationType": "bootstrap",
                "bPaginate": true,
                "bLengthChange": false,
                "oLanguage" : {
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sZeroRecords": "抱歉， 没有找到",
                    "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                    "sInfoEmpty": "没有数据",
                    "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                    "sZeroRecords": "没有检索到数据",
                    "sSearch": "名称:",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "前一页",
                        "sNext": "后一页",
                        "sLast": "尾页"
                    }
                }
            });
        } );
        function category_delete(id) {
            $.ajax({
                type: "POST",
                url: "/_admin/get_product_category",
                data: "id=" + id,
                success: function (msg) {
                    if (!confirm("此类别还有"+msg+"种饮品，确定删除此类别？")) {
                        window.event.returnValue = false;
                    }
                    else {
                        $.ajax({
                            type: "POST",
                            url: "/_admin/category_delete",
                            data: "id=" + id,
                            success: function (msg) {
                                alert(msg)
                                $("#c" + id).remove();
                            }
                        });
                    }
                }
            });
        }
        function category_edit(id,name) {
            $("#idc").val(id);
            $("#namec").val(name);
           $("#editc").modal("show");
        }
        function category_save() {
            var id= $("#idc").attr("value");
            var name= $("#namec").val();
            if(name!="")
            {
                $.ajax({
                    type: "POST",
                    url: "/_admin/category_edit_save",
                    data: "id=" + id+"&name="+name,
                    success: function (msg) {
                        $("#c"+id).find('td').eq(1).text(name);
                        alert(msg);
                    }
                });
            }
        }
    </script>
<?php include ("footer.php");

