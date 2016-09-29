<?php include ("header.php") ?>
<div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">饮品</a>
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
                            <?php echo '<font color="red">'. $this->session->userdata("error").'</font>';  $this->session->set_userdata("error",'');?>
                            <form name="addp" method="post" action="/_admin/product_save" enctype="multipart/form-data">
                            <table class="table table-bordered" id="add">
                                <tr><td>名称：</td><td><input name="name" type="text" class="form-control"></td><td>价格：</td><td><input name="price" type="text" class="form-control"></td></tr>
                                <tr><td>指定价格：</td><td><input name="manualoverride" type="text" class="form-control"></td><td>单位：</td><td><input name="unit" type="text" class="form-control" placeholder="(杯、对、个)"></td></tr>
                                <tr><td>类别：</td><td><select name="category" class="form-control"><? foreach ($categories->result_array() as $row){ ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option> <?php }?></td><td>图片：</td><td><input name="img" type="file"  class="form-control"></td></tr>
                                <tr><td>描述：</td><td><textarea name="description" style="width: 100%;" class="form-control"></textarea></td><td>状态:</td><td><select name="enabled"  class="form-control"><option value="1">Enabled</option><option value="0">Disabled</option></select></td></tr>
                                <tr><td colspan="4" ><center><input type="submit" name="submit" value="保 存" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" class="btn btn-danger" value="重 置"> </center></td></tr>
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
                                <thead><tr><td>ID</td><td>名称</td><td>栏目</td><td>价格</td><td>指定价格</td><td>单位</td><td>图片</td><td>状态</td><td>操作</td></tr></thead>
                                <tbody><?php
                                foreach ($products->result_array() as $row){
                                 ?>
                                <tr id="p<?php echo $row['id']; ?>"><td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['manualoverride']; ?></td>
                                    <td><?php echo $row['unit']; ?></td>
                                    <td> <a onmouseout="hiddenPic();" onmousemove="showPic(event,'/assets/products/<?php echo $row['img_src']; ?>');">图片</a></td>
                                    <td><?php
                                        if($row['status']==1)
                                        {
                                            echo '<span class="label label-success">Active</span>';
                                        }else if($row['status']==0)
                                        {
                                            echo '<span class="label label-danger">Inactive</span>';
                                        }
                                        ?>
                                    </td>
                                    <td><a href="/_admin/product_edit?id=<?php echo $row['id']; ?>">编辑</a>&nbsp;&nbsp;<a onclick="product_delete(<?php echo $row['id']; ?>)">删除</a></td>
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
    <div id="Layer1" style="display: none; position: absolute; z-index: 100;"></div>
    <hr>
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
    function showPic(e,sUrl){
        var x,y;
        x = e.clientX;
        y = e.clientY;
        document.getElementById("Layer1").style.left = x-200+'px';
        document.getElementById("Layer1").style.top = y+100+'px';
        document.getElementById("Layer1").innerHTML = "<img border='0' style='width: 200px;' src=\"" + sUrl + "\">";
        document.getElementById("Layer1").style.display = "";
    }
    function hiddenPic(){
        document.getElementById("Layer1").innerHTML = "";
        document.getElementById("Layer1").style.display = "none";
    }
    function product_delete($id) {
        if (!confirm("确定删除此饮品？")) {
            window.event.returnValue = false;
        }
        else {
            $.ajax({
                type: "POST",
                url: "/_admin/product_delete",
                data: "id=" + $id,
                success: function (msg) {
                    alert(msg)
                    $("#p" + $id).remove();
                }
            });
        }
    }
</script>
<?php include ("footer.php");

