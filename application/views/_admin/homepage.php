<?php include ("header.php") ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">首页图片</a>
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
                    <center> <?php echo '<font color="red">'. $this->session->userdata("herror").'</font>';  $this->session->set_userdata("herror",'');?></center>
                    <form name="addp" method="post" action="/_admin/home_page_save" enctype="multipart/form-data">
                        <table class="table table-bordered" id="add">
                            <tr><td>图片：</td><td><input name="name" id="name" type="file" class="form-control"></td></tr>
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
                    <table class="table table-bordered table-striped responsive" id="products_list" name="imges_list">
                        <thead> <tr><td>ID</td><td>名称</td><td>操作</td></tr></thead>
                        <tbody><?php
                        foreach ($home_page->result_array() as $row){
                            ?>
                            <tr><td><?php echo $row['id']; ?></td>
                                <td><img onmouseout="hiddenPic();" onmousemove="showPic(event,'/assets/images/<?php echo $row['image_src']; ?>');" style="width: 200px" src="<?php echo "/assets/images/".$row['image_src']; ?>"></td>
                                <td><a onclick="image_delete(<?php echo $row['id']; ?>)">删除</a></td></tr>
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
    <div id="Layer1" style="display: none; position: absolute; z-index: 100;"></div>
    <script type="text/javascript">
        function showPic(e,sUrl){
            var x,y;
            x = e.clientX;
            y = e.clientY;
            document.getElementById("Layer1").style.left = x-200+'px';
            document.getElementById("Layer1").style.top = y-70+'px';
            document.getElementById("Layer1").innerHTML = "<img border='0' style='width: 600px;' src=\"" + sUrl + "\">";
            document.getElementById("Layer1").style.display = "";
        }
        function hiddenPic(){
            document.getElementById("Layer1").innerHTML = "";
            document.getElementById("Layer1").style.display = "none";
        }
        function image_delete(id) {
            if (!confirm("确定删除此首页图片？")) {
                window.event.returnValue = false;
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "/_admin/image_delete",
                    data: "id=" + id,
                    success: function (msg) {
                        alert(msg)
                        $("#c" + id).remove();
                    }
                });
            }
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

