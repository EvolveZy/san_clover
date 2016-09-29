<?php include ("header.php") ?>
    <div xmlns="http://www.w3.org/1999/html">
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="/_admin/index">饮品</a>
            </li>
            <li>
                <a href="#">编辑饮品</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-plus"></i>Edit </h2>
                </div>
                <div class="box-content">
                    <center><?php if(isset($error)) echo '<font color="red">'.$error.'</font>';?></center>
                    <form name="addp" method="post" action="/_admin/product_edit?id=<?php echo $product->id; ?>" enctype="multipart/form-data">
                        <input name="id" type="hidden" value="<?php echo $product->id; ?>">
                        <table class="table table-bordered" id="edit">
                            <tr><td>名称：</td><td><input name="name" type="text" class="form-control" value="<?php echo $product->name; ?>"></td><td>价格：</td><td><input name="price" type="text" class="form-control" value="<?php echo $product->price; ?>"></td><td rowspan="5" width="200px;"><img style=" width: 200px; height: 200px;" src="/assets/products/<?php echo $product->img_src; ?>"></td></tr>
                            <tr><td>指定价格：</td><td><input name="manualoverride" type="text" class="form-control" value="<?php echo $product->manualoverride; ?>"></td><td>单位：</td><td><input name="unit" type="text" class="form-control" placeholder="(杯、对、个)" value="<?php echo $product->unit; ?>"></td></tr>
                            <tr><td>类别：</td><td><select name="category" class="form-control"><? foreach ($categories->result_array() as $row){ ?> <option <?php if($row["id"]==$product->category_id) echo "selected";?> value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option> <?php }?></td><td>图片：</td><td><input name="img" type="file"  class="form-control"></td></tr>
                            <tr><td>描述：</td><td><textarea name="description" style="width: 100%;" class="form-control"><?php echo $product->description; ?></textarea></td><td>状态:</td><td><select name="enabled"  class="form-control"><option <?php if($product->status) echo "selected";?> value="1">Enabled</option><option <?php if(!$product->status) echo "selected";?>  value="0">Disabled</option></select></td></tr>
                            <tr><td colspan="4" ><center><input type="submit" name="action" value="save" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" class="btn btn-danger" value="重 置"> </center></td></tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
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
    </script>
<?php include ("footer.php");

